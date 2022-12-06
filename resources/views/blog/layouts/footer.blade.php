<footer class="footer footer-white footer-big">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-md-3">
                    <h5>{{ __('Explora') }}</h5>
                    <ul class="links-vertical">
                        <li><a href="https://landrada.mx/">Inicio</a></li>
                        <li><a href="https://landrada.mx/cotizador/">Cotizar</a></li>
                        <li><a href="https://landrada.mx/central-de-pagos?v=1">Pagos en línea</a></li>
                        <li><a href="https://landrada.mx/calculadora-financiera">Calculadora financiera</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>{{ __('Categorias') }}</h5>
                    <ul class="links-vertical">
                        @foreach ($footerCategories as $category)
                            <li>
                                <a href="{{ route('blog.category', $category->slug) }}">
                                    {{ $category->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>{{ __('Etiquetas') }}</h5>
                    <ul class="links-horizontal">
                        @foreach ($footerTags as $tag)
                            @if ($tag->articles->isnotEmpty())
                            <li>
                                <a style = "padding:1px" href="{{ route('blog.tag', $tag->slug) }}"><span style="background-color: {{ $tag->color }}" class="badge badge-pill">{{ $tag->name }}</span></a>
                            </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>{{ __('Suscríbete al Blog') }}</h5>
                    <p>
                        {{ __('Únete a nuestro boletín y reciba noticias en su bandeja de entrada cada semana.') }}
                    </p>
                    <form class="form form-newsletter" method="post" action="{{route('blog.newsletter.store')}}" id="newsletter">
                        @csrf

                        <input style="display:none" name="newsletter" value="1">
                        @if ($errors->has('newsletter_email'))
                            <div id="email-error" class="error text-danger" for="email" style="display: block;">
                                <strong>{{ $errors->first('newsletter_email') }}</strong>
                            </div>
                        @endif
                        <div class="form-group bmd-form-group" >
                            <input type="email" class="form-control" name="newsletter_email" placeholder="Tu correo...">
                        </div>
                        <button type="submit" class="btn btn-primary btn-just-icon" name="button">
                            <i class="material-icons">{{ __('mail') }}</i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <hr>
        <!-- <nav>
            <ul>
                <li>
                    <a href="https://www.landrada.mx/calculadora-financiera" target="_blank">
                        {{ __('Calculadora Financiera') }}
                    </a>
                </li>
                <li>
                    <a href="https://creative-tim.com/presentation">
                        {{ __('About Us') }}
                    </a>
                </li>
                <li>
                    <a href="https://www.landrada.mx/cotizador/">
                        {{ __('Cotizador') }}
                    </a>
                </li>
                <li>
                    <a href="https://www.creative-tim.com/license">
                        {{ __('Licenses') }}
                    </a>
                </li>
                <li>
                    <a href="https://www.updivision.com" target="_blank">
                        {{ __('UPDIVISION') }}
                    </a>
                </li>
            </ul>
        </nav> -->
        <ul class="social-buttons">
            <li>
                <a href="https://www.facebook.com/LandradaDesarrollos/" class="btn btn-just-icon btn-link btn-facebook">
                    <i class="fa fa-facebook-square"></i>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/landradadesarrollos/" target="_blank" class="btn btn-just-icon btn-link btn-instagram">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>
            <li>
                <a href="https://www.linkedin.com/company/landradadesarrollos" target="_blank" class="btn btn-just-icon btn-link btn-linkedin">
                    <i class="fa fa-linkedin-square"></i>
                </a>
            </li>
            <li>
                <a href="https://www.youtube.com/channel/UCARO4RsYrAZ1R7nPqd-_-Lg" target="_blank" class="btn btn-just-icon btn-link btn-youtube">
                    <i class="fa fa-youtube-play"></i>
                </a>
            </li>
        </ul>
        <div class="copyright pull-center">
            {{ __('Copyright ©') }}
            <script>
                document.write(new Date().getFullYear()) 
            </script><a href="https://www.landrada.mx" target="_blank">{{ __(' Landrada Desarrollos') }}</a>{{ __(' Todos los Derechos Reservados.') }}
        </div>
    </div>
</footer>

@push('js')
    @if ($errors->has('newsletter_email'))
        <script>
            $(document).ready(
                function(){
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $("#newsletter").offset().top
                    }, 2000);
                });
        </script>
    @endif
@endpush