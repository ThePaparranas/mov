<?php

namespace App\Http\Controllers\Admin\Api;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Artisan;

class ArtisanController extends Controller
{
    /** @var Request */
    protected $request;

    /** @var Filesystem */
    protected $fs;

    /** @var string */
    protected $routes_cache_path;

    /** @var string */
    protected $views_cache_path;

    /** @var string */
    protected $config_cache_path;

    /** @var string */
    protected $config_cache_filename = 'config.php';

    /** @var string */
    protected $routes_cache_filename = 'routes.php';

    /** @var array */
    protected $response;

    /**
     * ArtisanController constructor.
     *
     * @param Filesystem $fs
     * @param Request $request
     */
    public function __construct(Filesystem $fs, Request $request)
    {
        $this->fs = $fs;
        $this->request = $request;
        $this->routes_cache_path = base_path('bootstrap/cache');
        $this->config_cache_path = base_path('bootstrap/cache');
        $this->views_cache_path = storage_path('framework/views');
        $this->response = $this->defaultCaches();
    }

    /**
     * Executes an Artisan command, with no options
     *
     * @return JsonResponse
     */
    public function executeCacheCommand(): JsonResponse
    {
        Artisan::call($this->request->input('command'));

        $output = Artisan::output();

        $this->setCaches();

        return response()->json(['caches' => $this->response, 'message' => $output]);
    }

    /**
     * Retrieves available caches
     *
     * @return JsonResponse
     */
    public function getSystemCaches(): JsonResponse
    {
        $this->setCaches();

        return response()->json($this->response);
    }

    /**
     * Initialize default available caches array
     *
     * @return array
     */
    protected function defaultCaches(): array
    {
        $cache_type = config('cache.default');

        return [
            'cache' => [
                'name' => 'App Cache [' . $cache_type . ']',
                'cacheable' => false,
                'cacheArtisanCommand' => '',
                'clearArtisanCommand' => 'cache:clear',
                'is_cached' => false,
                'is_file' => $cache_type === 'file',
                'size' => 0,
            ],
            'routes' => [
                'name' => 'Routes',
                'cacheable' => true,
                'cacheArtisanCommand' => 'route:cache',
                'clearArtisanCommand' => 'route:clear',
                'is_cached' => false,
                'is_file' => true,
                'size' => 0,
            ],
            'views' => [
                'name' => 'Views',
                'cacheable' => true,
                'cacheArtisanCommand' => 'view:cache',
                'clearArtisanCommand' => 'view:clear',
                'is_cached' => false,
                'is_file' => true,
                'size' => 0,
            ],
            'config' => [
                'name' => 'Config',
                'cacheable' => true,
                'cacheArtisanCommand' => 'config:cache',
                'clearArtisanCommand' => 'config:clear',
                'is_cached' => false,
                'is_file' => true,
                'size' => 0
            ]
        ];
    }

    /**
     * Updates available caches array
     *
     * @return void
     */
    protected function setCaches()
    {
        $views = $this->getCachedViews();
        $hasCachedRoutes = $this->hasCachedRoutes();
        $hasCachedViews = $this->hasCachedViews($views);
        $hasCachedConfig = $this->hasCachedConfig();

        if ($hasCachedRoutes) {
            $this->response['routes']['is_cached'] = $hasCachedRoutes;
            $this->response['routes']['size'] = $this->getRoutesCacheSize();
        }

        if ($hasCachedViews) {
            $this->response['views']['is_cached'] = $hasCachedViews;
            $this->response['views']['size'] = $this->getViewsCacheSize($views);
        }

        if ($hasCachedConfig) {
            $this->response['config']['is_cached'] = $hasCachedConfig;
            $this->response['config']['size'] = $this->getConfigCacheSize();
        }
    }

    /**
     * Checks for existence of routes cache file
     *
     * @return bool
     */
    protected function hasCachedRoutes(): bool
    {
        return $this->fs->exists($this->routes_cache_path.DIRECTORY_SEPARATOR.$this->routes_cache_filename);
    }


    /**
     * Checks for existence of config cache file
     *
     * @return bool
     */
    protected function hasCachedConfig(): bool
    {
        return $this->fs->exists($this->config_cache_path.DIRECTORY_SEPARATOR.$this->config_cache_filename);
    }

    /**
     * Checks for existence of any cached blade view
     *
     * @param array $views
     * @return bool
     */
    protected function hasCachedViews($views): bool
    {
        return sizeof($views) > 0;
    }

    /**
     * Returns array of files in cached views directory
     *
     * @return \Symfony\Component\Finder\SplFileInfo[]
     */
    protected function getCachedViews(): array
    {
        return $this->fs->files($this->views_cache_path);
    }

    /**
     * Checks for cached routes file size
     *
     * @return int
     */
    protected function getRoutesCacheSize(): int
    {
        return $this->getFileSize($this->routes_cache_path.DIRECTORY_SEPARATOR.$this->routes_cache_filename);
    }

    /**
     * Checks for cached config file size
     *
     * @return int
     */
    protected function getConfigCacheSize(): int
    {
        return $this->getFileSize($this->routes_cache_path.DIRECTORY_SEPARATOR.$this->config_cache_filename);
    }

    /**
     * Sums up cached views file sizes
     *
     * @param array $views
     * @return int
     */
    protected function getViewsCacheSize($views): int
    {
        $total = 0;

        foreach ($views as $view) {
            $total += $this->getFileSize($view);
        }

        return $total;
    }

    /**
     * Returns the given file size
     *
     * @param string $file
     * @return int
     */
    protected function getFileSize($file): int
    {
        return $this->fs->size($file);
    }
}
