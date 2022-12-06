<?php
/*!

 =========================================================
 * Material Blog PRO Laravel - v1.0.0
 =========================================================

 * Product Page: https://www.creative-tim.com/product/material-dashboard-pro-laravel
 * Copyright 2019 Creative Tim (http://www.creative-tim.com) & UPDIVISION (http://www.updivision.com)

 * Designed by www.invisionapp.com Coded by www.creative-tim.com & www.updivision.com

 =========================================================

 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

 */

namespace App\Http\Controllers\Blog;

use App\User;
use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Blog\BlogController;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class AuthorController extends BlogController
{
    /**
     * Show articles that belongs to an author
     * @param $user -> The author that you looking for
     * @return \Illuminate\View\View
     */
    public function index(User $user, Article $article)
    {
        //SEO
        SEOMeta::setTitle('Blog | Landrada Desarrollos', false);
        SEOMeta::setDescription('Encuentra información relevante sobre temas de finanzas e inversiones seguras. Una mente extraordinaria siempre está aprendiendo');
        SEOMeta::setCanonical($user->slug);
        SEOMeta::addKeyword(['inversion segura', 'inversion en yucatan', 'invierte en merida', 'lotes de inversion','lotes semiurbanizados', 'inversion con conciencia', 'altamisa precios', 'lagunas kuche', 'lotes en sisal', 'inversion en cancun', 'inversion en merida', 'patrimonio familiar', 'residenciales', 'lotes residenciales']);
        

        //OpenGraph
        OpenGraph::setDescription('Encuentra información relevante sobre temas de finanzas e inversiones seguras. Una mente extraordinaria siempre está aprendiendo');
        OpenGraph::setTitle('Blog | Landrada Desarrollos');
        OpenGraph::setUrl('https://blog.landrada.mx/');
        OpenGraph::addProperty('type', 'articles');
        
        $articles = $article->published()
            ->publishedUntilToday()
            ->author($user->id)
            ->orderBy('publish_date', 'desc')
            ->paginate(10);

        return view('blog.articles_author', compact(['articles', 'user']));
    }
}
