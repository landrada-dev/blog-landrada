@extends('blog.app', [
    'class' => 'blog-post',
    'headerImage' => 'landrada/blog/articulos/portada-blog-busqueda.jpg'
])
@section('header_content')
    <h1 class="title">
        {!! __('Amplía tus conocimientos en el tema de <br class="d-none d-xl-block">') !!} "{{$searching}}"
    </h1>
@endsection

@section('content')
    <div class="container">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 ml-auto mr-auto">
                        <h2 class="title">
                            {{ __("Resultados de la búsqueda \"") . $searching . __("\"") }}
                        </h2>
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