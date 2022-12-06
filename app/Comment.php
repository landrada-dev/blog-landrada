<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content','author_id','article_id', 'parent_id'
    ];
    /**
     * The comment that belong to the author.
     */
    public function author()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }

    /**
     * The comment that belong to the article.
     */
    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    /**
     * The childrens of a comment(reply).
     */
    public function childrens()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
