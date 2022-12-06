<?php

namespace App;

use App\Article;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug','picture', 'description'];

    /**
     * Get the route key for the category.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Get the articles of the category
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    /**
     * Get the path to the picture
     *
     * @return string
     */
    public function path()
    {
        return "/storage/{$this->picture}";
    }

}
