<?php

namespace App;

use App\Article;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'color'];

    /**
     * Get the articles of the tag
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }

    /**
     * Get the route key for the tag.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
    // public function scopeTop($query)
    // {
    //     //$query->
    // }
}
