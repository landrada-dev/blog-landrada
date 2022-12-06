<?php

namespace App\Http\Controllers\Blog;
use App\Tag;
use App\Http\Controllers\Blog\BlogController;
use App\Article;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class TagController extends BlogController
{
    /**
     * Show tag articles
     * @param App\Tag $tag
     * @return \Illuminate\View\View
     */
    public function index(Tag $tag, Article $article)
    {
        SEOMeta::setTitle($tag->name.' | Landrada Desarrollos', false);
        SEOMeta::setDescription('Encuentra información relevante sobre temas de '.$tag->name.'. Una mente extraordinaria siempre está aprendiendo');
        SEOMeta::setCanonical('https://blog.landrada.mx/');
        SEOMeta::addKeyword(['inversion segura', 'inversion en yucatan', 'invierte en merida', 'lotes de inversion','lotes semiurbanizados', 'inversion con conciencia', 'altamisa precios', 'lagunas kuche', 'lotes en sisal', 'inversion en cancun', 'inversion en merida', 'patrimonio familiar', 'residenciales', 'lotes residenciales']);
        

        //OpenGraph
        OpenGraph::setDescription('Encuentra información relevante sobre temas de finanzas e inversiones seguras. Una mente extraordinaria siempre está aprendiendo');
        OpenGraph::setTitle('Blog | Landrada Desarrollos');
        OpenGraph::setUrl('https://blog.landrada.mx/');
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::addImage('https://blog.landrada.mx/landrada/blog/blog-landrada-cover.jpg');
        $articles = $article->published()->publishedUntilToday()->tag($tag->id)->orderBy('publish_date', 'desc')->paginate(10);

        return view('blog.articles_tag', compact(['articles', 'tag']));
    }
}
