<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'imdb_id',
        'provider_id',
    ];

    public function type(): void
    {
        $this->hasOne(MovieType::class);
    }

    public function provider(): void
    {
        $this->hasOne(Provider::class);
    }
}
