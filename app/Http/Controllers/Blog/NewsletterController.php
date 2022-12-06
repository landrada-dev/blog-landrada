<?php

namespace App\Http\Controllers\Blog;

use Newsletter;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsletterRequest;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class NewsletterController extends Controller
{
    /**
     * Store a newly email in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsletterRequest $request)
    {
        // return redirect()->to(url()->previous() . '#newsletter')->withErrors(['newsletter_email'=> "Newsletter feature is not enabled in the demo version!"]);
        if (! Newsletter::isSubscribed($request->newsletter_email)) {
            Newsletter::subscribe($request->newsletter_email);
        }
        return redirect()->to('thanks_newsletter');
    }
    
    public function thanksNewsletter(){
        //SEO
        SEOMeta::setTitle('Blog | Landrada Desarrollos', false);
        SEOMeta::setDescription('Encuentra información relevante sobre temas de finanzas e inversiones seguras. Una mente extraordinaria siempre está aprendiendo');
        SEOMeta::setCanonical('https://blog.landrada.mx/');
        SEOMeta::addKeyword(['inversion segura', 'inversion en yucatan', 'invierte en merida', 'lotes de inversion','lotes semiurbanizados', 'inversion con conciencia', 'altamisa precios', 'lagunas kuche', 'lotes en sisal', 'inversion en cancun', 'inversion en merida', 'patrimonio familiar', 'residenciales', 'lotes residenciales']);
        return view('blog.thanks_newsletter');
    }
   
}
