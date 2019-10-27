<?php

use App\Mov\ConsoleWriter;

if (! function_exists('imdb_path')) {
    /**
     * Get the imdb files path.
     *
     * @param  string  $path
     * @return string
     */
    function imdb_path($path = '')
    {
        return app()->databasePath('imdb').($path ? DIRECTORY_SEPARATOR.$path : $path);
    }
}

if (! function_exists('imdb_downloads_path')) {
    /**
     * Get the imdb files path.
     *
     * @param  string  $path
     * @return string
     */
    function imdb_downloads_path($path = '')
    {
        return app()->databasePath('imdb/downloads').($path ? DIRECTORY_SEPARATOR.$path : $path);
    }
}

if (! function_exists('emit')) {
    /**
     * Broadcast to Console
     *
     * @param  string       $msg
     * @param  string|null  $type
     *
     * @return void
     */
    function emit($msg, $type = null)
    {
        ConsoleWriter::broadcast($msg, $type);
    }
}

if (! function_exists('formatBytes')) {
    /**
     * @param int $size
     * @param int $precision
     *
     * @return string
     */
    function formatBytes($size, $precision = 2)
    {
        if (! $size) {
            return "N/A";
        }

        $base = log($size, 1024);
        $suffixes = ['', 'k', 'M', 'G', 'T'];

        return round(pow(1024, $base - floor($base)), $precision) .' '. $suffixes[floor($base)] . 'B';
    }
}
