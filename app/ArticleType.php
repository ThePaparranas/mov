<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function articles(): void
    {
        $this->belongsToMany(Article::class);
    }
}
