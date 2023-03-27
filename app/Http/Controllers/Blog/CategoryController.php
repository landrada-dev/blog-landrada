<?php

namespace App\Http\Controllers\Blog;

use App\Category;
use App\Article;
use App\Http\Controllers\Blog\BlogController;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Illuminate\Support\Facades\Request;

class CategoryController extends BlogController
{
    /**
     * Show category articles
     * @param App\Category $category
     * @return \Illuminate\View\View
     */
    public function index(Category $category, Article $article)
    {
        SEOMeta::setTitle($category->name.' | Landrada Desarrollos', false);
        SEOMeta::setDescription($category->description);
        SEOMeta::addMeta('article:published_time', $article->publish_date, 'property');
        SEOMeta::setCanonical(Request::url());
        SEOMeta::addKeyword(['inversion segura', 'inversion en yucatan', 'invierte en merida', 'lotes de inversion','lotes semiurbanizados', 'inversion con conciencia', 'altamisa precios', 'lagunas kuche', 'lotes en sisal', 'inversion en cancun', 'inversion en merida', 'patrimonio familiar', 'residenciales', 'lotes residenciales']);
        

        //OpenGraph
        OpenGraph::setDescription($category->description);
        OpenGraph::setTitle($category->name.' | Landrada Desarrollos');
        OpenGraph::setUrl(Request::url());
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::addImage('https://blog.landrada.mx'.$category->path());
        
        $articles = $article->published()
            ->publishedUntilToday()
            ->category($category->id)
            ->orderBy('publish_date', 'desc')
            ->paginate(4);

        return view('blog.articles_category', compact(['articles', 'category']));
    }
}
