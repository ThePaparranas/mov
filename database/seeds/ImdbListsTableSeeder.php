<?php

use App\ImdbList;
use Illuminate\Database\Seeder;

class ImdbListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('imdb_lists')->truncate();

        $list = new ImdbList();
        $list->name = 'name.basics';
        $list->url = 'https://datasets.imdbws.com/name.basics.tsv.gz';
        $list->description = 'Contains the following information for names: <ul><li>nconst (string) - alphanumeric unique identifier of the name/person</li><li>primaryName (string)– name by which the person is most often credited</li><li>birthYear – in YYYY format</li><li>deathYear – in YYYY format if applicable, else \'\N\'</li><li>primaryProfession (array of strings)– the top-3 professions of the person</li><li>knownForTitles (array of tconsts) – titles the person is known for</li></ul>';
        $list->save();

        $list = new ImdbList();
        $list->name = 'title.akas';
        $list->url = 'https://datasets.imdbws.com/title.akas.tsv.gz';
        $list->description = 'Contains the following information for titles: <ul><li>titleId (string) - a tconst, an alphanumeric unique identifier of the title</li><li>ordering (integer) – a number to uniquely identify rows for a given titleId</li><li>title (string) – the localized title</li><li>region (string) - the region for this version of the title</li><li>language (string) - the language of the title</li><li>types (array) - Enumerated set of attributes for this alternative title. One or more of the following: "alternative", "dvd", "festival", "tv", "video", "working", "original", "imdbDisplay". New values may be added in the future without warning</li><li>attributes (array) - Additional terms to describe this alternative title, not enumerated</li><li>isOriginalTitle (boolean) – 0: not original title; 1: original title</li></ul>';
        $list->save();

        $list = new ImdbList();
        $list->name = 'title.basics';
        $list->url = 'https://datasets.imdbws.com/title.basics.tsv.gz';
        $list->description = 'Contains the following information for titles: <ul><li>tconst (string) - alphanumeric unique identifier of the title</li><li>titleType (string) – the type/format of the title (e.g. movie, short, tvseries, tvepisode, video, etc)</li><li>primaryTitle (string) – the more popular title / the title used by the filmmakers on promotional materials at the point of release</li><li>originalTitle (string) - original title, in the original language</li><li>isAdult (boolean) - 0: non-adult title; 1: adult title</li><li>startYear (YYYY) – represents the release year of a title. In the case of TV Series, it is the series start year </li><li>endYear (YYYY) – TV Series end year. ‘\N’ for all other title types</li><li>runtimeMinutes – primary runtime of the title, in minutes</li><li>genres (string array) – includes up to three genres associated with the title</li></ul>';
        $list->save();

        $list = new ImdbList();
        $list->name = 'title.crew';
        $list->url = 'https://datasets.imdbws.com/title.crew.tsv.gz';
        $list->description = 'Contains the director and writer information for all the titles in IMDb: <ul><li>tconst (string) - alphanumeric unique identifier of the title</li><li>directors (array of nconsts) - director(s) of the given title</li><li>writers (array of nconsts) – writer(s) of the given title</li></ul>';
        $list->save();

        $list = new ImdbList();
        $list->name = 'title.episode';
        $list->url = 'https://datasets.imdbws.com/title.episode.tsv.gz';
        $list->description = 'Contains the tv episode information. Fields include: <ul><li>tconst (string) - alphanumeric unique identifier of the title</li><li>directors (array of nconsts) - director(s) of the given title</li><li>writers (array of nconsts) – writer(s) of the given title</li></ul>';
        $list->save();

        $list = new ImdbList();
        $list->name = 'title.principals';
        $list->url = 'https://datasets.imdbws.com/title.principals.tsv.gz';
        $list->description = 'Contains the principal cast/crew for titles: <ul><li>tconst (string) - alphanumeric unique identifier of the title</li><li>ordering (integer) – a number to uniquely identify rows for a given titleId</li><li>nconst (string) - alphanumeric unique identifier of the name/person</li><li>category (string) - the category of job that person was in</li><li>job (string) - the specific job title if applicable, else \'\N\'</li><li>characters (string) - the name of the character played if applicable, else \'\N\'</li></ul>';
        $list->save();

        $list = new ImdbList();
        $list->name = 'title.ratings';
        $list->url = 'https://datasets.imdbws.com/title.ratings.tsv.gz';
        $list->description = 'Contains the IMDb rating and votes information for title: <ul><li>nconst (string) - alphanumeric unique identifier of the name/person</li><li>primaryName (string)– name by which the person is most often credited</li><li>birthYear – in YYYY format</li><li>deathYear – in YYYY format if applicable, else \'\N\'</li><li>primaryProfession (array of strings)– the top-3 professions of the person</li><li>knownForTitles (array of tconsts) – titles the person is known for</li></ul>';
        $list->save();
    }
}
