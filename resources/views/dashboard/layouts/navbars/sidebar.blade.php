<div class="sidebar" data-color="rose" data-background-color="black"
    data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
  
      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="#" class="simple-text logo-mini">
            <img class="img img-fluid" width="45px" src="{{ asset('landrada') }}/blog/logos/Landrada_icono_blanco.png">
            <!-- <img src="{{ asset('images') }}/logos/logo2.png" alt=""> -->
        </a>
        <a href="#" class="simple-text logo-normal">
            {{ __('Landrada') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ auth()->user()->profilePicture() }}" />
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span>
                        {{ auth()->user()->name }}
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile.edit') }}">
                                <span class="sidebar-mini"> MP </span>
                                <span class="sidebar-normal"> Mi Perfil </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <span class="sidebar-mini"> EX </span>
                                <span class="sidebar-normal"> Salir </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item{{ $activePage == '' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">
                     <i _ngcontent-gbk-c19="" class="material-icons icon-image-preview">home</i>
                    <p>{{ __('Ir al Blog') }}</p>
                </a>
            </li>   
            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">
                        <i class="material-icons">dashboard</i>
                    <p>{{ __('Dashboard') }} </p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('profile.edit') }}">
                        <i _ngcontent-gsf-c19="" class="material-icons icon-image-preview">account_circle</i>
                    <p>{{ __('Perfil de Usuario') }} </p>
                </a>
            </li>
            @can('manage-users', App\User::class)
            <li class="nav-item{{ $activePage == 'role-management' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('role.index') }}">
                        <i _ngcontent-gbk-c19="" class="material-icons icon-image-preview">assignment_ind</i>
                    <p> {{ __('Roles') }} </p>
                </a>
            </li>
            @endcan
            @can('manage-users', App\User::class)
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('user.index') }}">
                        <i _ngcontent-gbk-c19="" class="material-icons icon-image-preview">supervised_user_circle</i>
                    <p> {{ __('Usuarios') }} </p>
                </a>
            </li>
            @endcan
            @can('manage-articles', App\User::class)
            <li class="nav-item{{ $activePage == 'category-management' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('category.index') }}">
                        <i _ngcontent-gbk-c19="" class="material-icons icon-image-preview">category</i>
                   <p> Categorias</p>
                </a>
            </li>
            @endcan
            @can('manage-articles', App\User::class)
                <li class="nav-item{{ $activePage == 'tag-management' ? ' active' : '' }}">
                    <a class="nav-link" href="{{ route('tag.index') }}">
                            <i _ngcontent-gbk-c19="" class="material-icons icon-image-preview">loyalty</i>
                        <p> {{ __('Etiquetas') }} </p>
                    </a>
                </li>
            @endcan
            <li class="nav-item{{ $activePage == 'item-management' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('article.index') }}">
                        <i _ngcontent-gbk-c19="" class="material-icons icon-image-preview">class</i>
                    <p> {{ __('Articulos') }} </p>
                </a>
            </li>
            <hr class="bg-white">
        </ul>
    </div>
</div>