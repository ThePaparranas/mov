<?php

namespace App\Mov\Genres;

use App\MovieDetail;

class GenresCreator
{
    public static function create()
    {
        $details = MovieDetail::all('Genre');

        $arr = [];

        foreach ($details as $detail) {
            $exp = explode(', ', $detail->Genre);

            foreach ($exp as $item) {
                array_push($arr, $item);
            }
        }

        $unique = array_unique($arr);
        $vals = array_values($unique);

        asort($vals);

        \DB::table('genres')->truncate();

        foreach ($vals as $val) {
            \DB::table('genres')->insert(
                ['name' => $val]
            );
        }

        return $vals;
    }
}
