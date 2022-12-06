<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Category;
use App\User;
use App\Tag;
use Illuminate\Support\Facades\View;

class BlogController extends Controller
{
    function __construct() {
        $navCategories = Category::has('articles', '>', '0')->take(8)->get();
        $footerCategories = Category::has('articles', '>', '0')->take(8)->get();
        $footerAuthors = User::userIsAuthor()->take(8)->get();
        $footerTags = Tag::take(15)->get();
        View::share([
            'navCategories' => $navCategories,
            'footerCategories' => $footerCategories,
            'footerAuthors' => $footerAuthors,
            'footerTags' => $footerTags
        ]);
    }
}
