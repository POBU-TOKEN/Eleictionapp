<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="#" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/digital.png" alt="" style="width: 200px;">  -->
            <h1 class="sitename">digital ballot box </h1>
            <!--<p>O futuro da Democracia</p>-->
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{route('home')}}" class="active">Home</a></li>
                <li><a href="#about">Sobre Nós</a></li>
                <li><a href="#gallery">Galeria</a></li>
                <li><a href="#team">Time</a></li>
                <li><a href="#contact">Conctatos</a></li>
                <li> @guest
                        <a href="{{ route('login') }}">Login</a>
                    @endguest
                </li>
                <li> @guest
                        <a href="{{ route('register') }}">Registrar-se</a>
                    @endguest
                </li>
                @auth
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <img src="{{ asset('storage/' . auth()->user()->imagem) }}" width="30px"
                                style="border-radius: 50%">
                            Olá, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Conta</a></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="dropdown-item" type="submit">Sair</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @endauth
            </ul>
            @auth
                @can('admin-access')
                    <a href="{{ route('admin.dashboard') }}"><i class="fa fa-user"></i> Painel Admin</a>
                @endcan

                @cannot('admin-access')
                    <a href="{{ route('voter.dashboard') }}"><i class="fa fa-user"></i> Painel do Eleitor </a>
                @endcannot
            @endauth
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>
