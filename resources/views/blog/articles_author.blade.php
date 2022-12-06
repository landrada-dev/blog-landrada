@extends('blog.app', [
    'class' => '',
    'headerImage' => '/landrada/blog/articulos/construye-tu-patrimonio.jpg'
])

@section('header_content')
    <h1 class="title">
        {!! __('Invierte con conciencia <br class="d-none d-xl-block"> de la mano con Landrada') !!}
    </h1>
@endsection 

@section('content')
    <div class="container">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 ml-auto mr-auto">
                        <div class="card card-profile card-plain">
                            <div class="row">
                                <div class="col-md-9 text-left">
                                    <h2 class="card-title"><span class="font-weight-light">{{ __('Artículos de ') }}</span>{{ $user->name }}</h2>
                                    <h4>{{ $user->about }}</h4>
                                </div>
                                <div class="col-md-3">
                                    <div class="card-avatar">
                                        <a href="{{ route('blog.author', $user->slug) }}">
                                            <img class="img" src="{{ $user->profilePicture() }}">
                                        </a>
                                        <div class="ripple-container"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
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