@extends('dashboard.layouts.app', [
    'class' => 'off-canvas-sidebar',
    'classPage' => 'login-page',
    'activePage' => 'login',
    'title' => __('Landrada Desarrollo'),
    'pageBackground' => asset("landrada").'/blog/articulos/4-razones-para-invertir.jpg'
])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 ml-auto mr-auto mb-1 text-center">
                <h3>{{ __('Bienvenido al Blog de Landrada Desarrollos.') }} </h3>
            </div>
            <!-- <div class="col-lg-6 col-md-8 col-sm-10 ml-auto mr-auto mb-3 text-center">
                @if ($userType == null)
                    <h5 class="text-lead text-white mt-2 mb-0">
                        <strong>{{ __('You can log in with 3 user types:') }}</strong>
                    </h5>
                    <ol class="text-lead text-light text-left mt-3 mb-3">      
                        <li>{!! __('Username <b>admin@material.com</b> Password <b>secret</b> - to manage the blog') !!}</li>
                        <li>{!! __('Username <b>creator@material.com</b> Password <b>secret</b> - to manage articles') !!}</li>
                        <li>{!! __('Username <b>member@material.com</b> Password <b>secret</b> - to comment') !!}</li>
                    </ol>
                @elseif ($userType == 1)
                    <h5 class="text-lead text-white mt-2 mb-0">
                        <strong>{{ __('You can log in as admin to manage the blog by using these credentials:') }}</strong>
                    </h5> 
                    <p> {!! __('Username <b>admin@material.com</b> Password <b>secret</b>') !!} </p>
                @elseif ($userType == 2)
                    <h5 class="text-lead text-white mt-2 mb-0">
                        <strong>{{ __('You can log in as author to manage articles by using these credentials:') }}</strong>
                    </h5>
                    <p> {!! __('Username <b>author@material.com</b> Password <b>secret</b>') !!} </p>
                @elseif ($userType == 3)
                    <h5 class="text-lead text-white mt-2 mb-0">
                        <strong>{{ __('You can log in as member to comment by using these credentials:') }}</strong>
                    </h5>
                    <p> {!! __('Username <b>member@material.com</b> Password <b>secret</b>') !!} </p>
                @endif
            </div> -->
        </div>
        <div class="row mt-2">
            <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                <form class="form" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="card card-login card-hidden">
                        <div class="card-header card-header-rose text-center">
                            <h4 class="card-title">{{ __('Ingresar') }}</h4>
                        </div>
                        <div class="card-body ">
                            <span class="form-group  bmd-form-group email-error{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">email</i>
                                        </span>
                                    </div>
                                    <input type="email" class="form-control" id="exampleEmails" name="email"
                                        placeholder="{{ __('Email...') }}"
                                        value="" required>
                                    @include('dashboard.alerts.feedback', ['field' => 'email'])
                                </div>
                            </span>
                            <span class="form-group bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control" id="examplePassword" name="password"
                                        placeholder="{{ __('Password...') }}" value="" required>
                                    @include('dashboard.alerts.feedback', ['field' => 'password'])
                                </div>
                            </span>
                            <div class="form-check mr-auto ml-3 mt-3">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember"
                                        {{ old('remember') ? 'checked' : '' }}> {{ __('Recuerdame') }}
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="card-footer justify-content-center">
                            <button type="submit" class="btn btn-rose btn-link btn-lg">{{ __('Ingresar') }}</button>
                        </div>
                    </div>
                </form>
                <div class="row d-none">
                    <div class="col-6">
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-light">
                            <small>{{ __('Olvidaste tu contraseña?') }}</small>
                        </a>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function () {
            md.checkFullPageBackgroundImage();
            setTimeout(function () {
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700);
        });
    </script>
@endpush