<?php

namespace App\Http\Controllers\Blog;

use App\Article;
use App\Comment;
use App\Http\Requests\CommentsRequest;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class ArticleController extends BlogController
{
    /**
     * Show all articles
     * @param App\Article $article -> The details about the article
     * @return \Illuminate\View\View
     */
    public function index(Article $model)
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
        OpenGraph::addImage('https://blog.landrada.mx/landrada/blog/blog-landrada-cover.jpg');

        $articles = $model->with(['tags', 'category'])->orderBy('publish_date', 'desc')->paginate(10);        
        return view('blog.all_articles', ['articles' => $articles]);
    }

    /**
     * Show article
     * @param App\Article $article -> The details about the article
     * @param App\Comment $modelComment -> The details about the comment
     * @return \Illuminate\View\View
     */
    public function show(Article $article, Comment $modelComment)
    {
        SEOMeta::setTitle($article->title, false);
        SEOMeta::setDescription($article->excerpt);
        SEOMeta::addMeta('article:published_time', $article->publish_date->toW3CString(), 'property');
        SEOMeta::setCanonical($article->slug);

        //OpenGraph
        OpenGraph::setDescription($article->excerpt);
        OpenGraph::setTitle($article->title);
        OpenGraph::setUrl($article->slug);
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addImage('https://blog.landrada.mx'.$article->path());
        
        $moreArticles = $article->published()
            ->publishedUntilToday()
            ->category($article->category_id)
            ->differentFromCurrentArticle($article->id)
            ->orderBy('publish_date', 'desc')
            ->take(3)
            ->get();
        
        return view('blog.show', compact(['article', 'moreArticles']));
    }

    /**
     * Store an article
     * @param \App\Http\Requests\CommentsRequest $request
     * @param App\Comment $model -> The details about the comment
     * @param App\Article $article -> The details about the article
     * @return \Illuminate\View\View
     */
    public function store(CommentsRequest $request, Comment $model, Article $article)
    {
        $model = $model->create($request->merge([
            'author_id' => auth()->user()->id,
            'article_id' => $article->id
        ])->all());

        return redirect()->to(url()->previous() . '#comments');
    }
}
