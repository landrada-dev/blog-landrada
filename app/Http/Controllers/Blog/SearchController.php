<?php

namespace App\Http\Controllers\Blog;
use App\Http\Controllers\Blog\BlogController;
use Illuminate\Http\Request;
use App\Article;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class SearchController extends BlogController
{
    /**
     * Show articles that have searching words in it
     * @param $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request, Article $article)
    {
        $searching = $request->input('searching');
        //SEO
        SEOMeta::setTitle('Conoce más acerca de '.$searching.' | Landrada Desarrollos', false);
        SEOMeta::setDescription('Encuentra información relevante sobre temas de finanzas e inversiones seguras. Una mente extraordinaria siempre está aprendiendo');
        SEOMeta::setCanonical('https://blog.landrada.mx/');
        SEOMeta::addKeyword(['inversion segura', 'inversion en yucatan', 'invierte en merida', 'lotes de inversion','lotes semiurbanizados', 'inversion con conciencia', 'altamisa precios', 'lagunas kuche', 'lotes en sisal', 'inversion en cancun', 'inversion en merida', 'patrimonio familiar', 'residenciales', 'lotes residenciales']);
        
        

        //OpenGraph
        OpenGraph::setDescription('Encuentra información relevante sobre temas de finanzas e inversiones seguras. Una mente extraordinaria siempre está aprendiendo');
        OpenGraph::setTitle('Blog | Landrada Desarrollos');
        OpenGraph::setUrl('https://blog.landrada.mx/');
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::addImage('https://blog.landrada.mx/landrada/blog/blog-landrada-cover.jpg');
        
        
        $articles = $article->published()->publishedUntilToday()->search($searching)->paginate(10);

        return view('blog.articles_search', compact(['articles', 'searching']));
    }
}
