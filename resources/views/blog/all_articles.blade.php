@extends('blog.app', [
    'class' => 'blog-post',
    'headerImage' => 'landrada/blog/blog-landrada-cover.jpg'
])
@section('header_content')
    <h1 class="title">
         {!! __('Invierte en conocimiento y siempre obtendrás excelentes resultados <br class="d-none d-xl-block"> ') !!}
        <!--<div class=" new-feature ">
            <h3 class="new-sub">Get three products at the price of one.</h3>
            <h3 class="new-sub mt-0"><i class="material-icons hide-icon-head">dashboard</i><span class="ml-0">Ready to use blog with Laravel admin</span></h3>
            <h3 class="new-sub mt-0"><i class="material-icons hide-icon-head">dashboard</i><span class="ml-0">Material Dashboard PRO</span></h3>
            <h3 class="new-sub mt-0"><i class="material-icons hide-icon-head">dashboard</i>Material Kit PRO</h3>
            </div> -->
    </h1>
@endsection

@section('content')
    <div class="container">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 ml-auto mr-auto">
                        <h2 class="title">{{ __('Todos los artículos') }}</h2>
                        @foreach($articles as $article)
                            @include('blog._partials.article_full')
                        @endforeach
                        @include('blog._partials.pagination')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection