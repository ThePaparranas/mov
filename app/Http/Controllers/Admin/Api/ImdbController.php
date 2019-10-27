<?php

namespace App\Http\Controllers\Admin\Api;

use App\ImdbList;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Mov\ImdbListsUpdater\ImdbListsUpdater;
use App\Http\Controllers\AdminApiController as Controller;

class ImdbController extends Controller
{
    /** @var \Illuminate\Http\Request */
    protected $request;

    /** @var string */
    protected $errorMsg = '';

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return $this->respond($this->allLists());
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(): JsonResponse
    {
        $start = microtime(true);

        $a = new ImdbListsUpdater();
        $r = $a->update();

        $end = microtime(true);
        $diff = round($end - $start, 2);
        $human = gmdate("H:i:s", $diff);

        emit("SUCCESS: UPDATE COMPLETE ({$human})");
        dd($r);

        return $this->respond($this->allLists());
    }

    public function find($id)
    {
        $list = 'title.basics';
        $file = imdb_path($list);
        $res = [];
        $heads = null;
        $fp = fopen($file.'.tsv', "r");
        $line = fgets($fp);
        $c = 0;
        while (false !== ($line = fgets($fp))) {
            $values = explode("\t", trim($line));
            $heads = $heads ?? $values;

            if (null !== $heads) {
                $len = strlen($values[0]);
                if (isset($res[$len])) {
                    $res[$len] = $res[$len] + 1;
                } else {
                    $res[$len] = 1;
                }
/*                if ($values[0] === $id) {
                    $res = $values;
                    break;
                }*/
            }
        }

        fclose($fp);
dd($res);

        $identifier = substr($id, 0, 2);
        $isTitle = $identifier === 'tt';
        $isName = $identifier === 'nm';

        if ($isName) {
            return $this->findName($id);
        }

        if ($isTitle) {
            return $this->findTitle($id);
        }

        return $this->respond("NOT FOUND: unknown identifier {$identifier}", 404);
    }

    protected function findTitle($id)
    {
        $list = 'title.basics';
        $file = imdb_path($list);
        $lof = ImdbList::where('name', $list)->first()->linecount;
//dd($lof);
        //$result = $this->binarySearch($file, $id, $lof);
        //dd($result);
        $res = [];
        $heads = null;
        $fp = fopen($file.'.tsv', "r");
        $line = fgets($fp);
        $res[1] = explode("\t", trim($line));
        $line2 = fgets($fp);
        $res[2]  = explode("\t", trim($line2));
        fclose($fp);
        dd($res);

        while (false !== ($line = fgets($fp))) {
            $values = explode("\t", trim($line));
            $heads = $heads ?? $values;

            if (null !== $heads) {
                if ($values[0] === $id) {
                    $res = $values;
                    break;
                }
            }
        }

        fclose($fp);

        $data = array_combine($heads, $res);

        return $this->respond($data);
    }

    protected function findName($id)
    {

    }

    protected function binarySearch($handle, $start, $end, $value)
    {
        $a = [
            'tt10389838',
            'tt1038983',
            'tt10389840',
            'tt10389842',
            'tt10389844',
            'tt10389846',
            'tt10389848',
            'tt1038984',
        ];
        sort($a);
        dd($a);

    }

    protected function imdbIdToInt($n): int
    {
        return intval(substr($n, 0, 2));
    }

    protected function allLists()
    {
        return ImdbList::all();
    }
}
