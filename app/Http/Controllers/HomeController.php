<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Blog\BlogController;
use App\User;
use App\Article;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

class HomeController extends BlogController
{
    /**
     * Show the application home
     *
     * @return \Illuminate\View\View
     */
    public function index(User $user, Article $article)
    {
        //SEO
        SEOMeta::setTitle('Blog | Landrada Desarrollos', false);
        SEOMeta::setDescription('Encuentra información relevante sobre temas de finanzas e inversiones seguras. Una mente extraordinaria siempre está aprendiendo');
        SEOMeta::setCanonical('https://blog.landrada.mx/');
        SEOMeta::addKeyword(['inversion segura', 'inversion en yucatan', 'invierte en merida', 'lotes de inversion','lotes semiurbanizados', 'inversion con conciencia', 'altamisa precios', 'lagunas kuche', 'lotes en sisal', 'inversion en cancun', 'inversion en merida', 'patrimonio familiar', 'residenciales', 'lotes residenciales']);
        

        //OpenGraph
        OpenGraph::setDescription('Encuentra información relevante sobre temas de finanzas e inversiones seguras. Una mente extraordinaria siempre está aprendiendo');
        OpenGraph::setTitle('Blog | Landrada Desarrollos');
        OpenGraph::setUrl('https://blog.landrada.mx/');
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::addProperty('fb:app_id', '655968634437471');
        OpenGraph::addImage('https://blog.landrada.mx/landrada/blog/blog-landrada-cover.jpg');


        $featured_articles = $article->published()->showHomepage()->publishedUntilToday()->orderBy('publish_date', 'desc')->get();
        $latest_articles = $article->published()->publishedUntilToday()->orderBy('publish_date', 'desc')->take(3)->get();
        $authors = $user->userIsAuthor()->take(4)->get();

        return view('blog.home', compact(['featured_articles', 'latest_articles', 'authors']));
    }
}
