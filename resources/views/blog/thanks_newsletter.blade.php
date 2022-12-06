@extends('blog.appthanks', [
    'class' => 'blog-post',
    'headerImage' => '/landrada/blog/articulos/construye-tu-patrimonio.jpg'
])
@section('style')
    <style>
        .main-raised{
            margin: 0px;
            margin-top: 60px;
        }
    </style>
@endsection
@section('content')
<div class="container">
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-10 ml-auto mr-auto">
                    <h2 class="title text-center">¡Gracias por suscribirte a nuestro blog!</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection