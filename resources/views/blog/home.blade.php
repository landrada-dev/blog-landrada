@extends('blog.app', [
    'class' => 'blog-post',
    'headerImage' => '/landrada/blog/inicio-blog-landrada.jpg'
])

@section('header_content')
    <h1 class="title text-center">
        {!!__('Todo lo que necesitas saber sobre inversiones seguras lo encuentras aquí<br class="d-none d-xl-block">') !!}
    </h1>
@endsection

@section('content')
    <div class="container">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 ml-auto mr-auto">
                        <h2 class="title">{{ __('Artículos destacados') }}</h2>
                            <div class="card card-plain card-blog">
                                @foreach ($featured_articles as $article)
                                    @include('blog._partials.featured_articles')
                                @endforeach
                            </div>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="section">
                <h2 class="title text-center">{{ __('Últimos artículos') }}</h2>
                <div class="row justify-content-center">
                    @foreach ($latest_articles as $article)
                        @include('blog._partials.latest_articles')
                    @endforeach
                    <a href="{{ route('blog.article.index') }}" class="btn btn-rose btn-raised btn-round">
                        {{ __('Ver todo') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="team-5 section-image" style="background-image: url('/material/img/bg7.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">{{ __('Our Top Authors') }}</h2>
                    <h5 class="description">{{ __('This is the paragraph where you can write more details about your team. Keep you
                        user engaged by providing meaningful information.') }}</h5>
                </div>
            </div>
            <div class="row">
                @foreach ($authors as $author)
                    @include('blog._partials.author')
                @endforeach
            </div>
        </div>
    </div> -->
@endsection