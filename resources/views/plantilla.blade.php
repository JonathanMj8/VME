<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sitio web de veterinariakaren" />
    <link rel="shortcut icon" href="imagenes/veterinario.ico" />
    <meta name="author" content="Jonathan Meza" />
	<title>
		@yield('titulo','VME')
	</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
    <!-- <link rel="stylesheet" type="text/css" href="../css/styles.css" /> -->
    <link rel="stylesheet" type="text/css" href="../css/custom.css" />
    <link rel="stylesheet" type="text/css" href="../css/estilos.css" />
</head>
<body>
    	<header>
            <section class="header-bs">
                <div>
                    <a id="boton" href="/"><img class="img_header" src="imagenes/logo.JPEG"/></a>
            		<h1 class="site-heading text-center text-faded d-none d-lg-block">
                            <span class="site-heading-upper text-primary mb-3">VISOR DE MEMORIAS DE ESTADÍAS</span>                           
                    </h1>
                </div>
            </section>
    	</header>
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index">VSM</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase fw-bold" href="/">Inicio</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase fw-bold" href="memorias">Memorias de Estadías</a></li>
                                <!-- Authentication Links -->
                                @guest
                                @if (Route::has('login'))
                                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase fw-bold" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                                    </li>
                                @endif
                                @if (Route::has('register'))
                                <li class="nav-item px-lg-4"><a class="nav-link text-uppercase fw-bold"href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                    </li>
                                @endif
                                @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endguest   
                        </li>                    
                    </ul>
                </div>
            </div>
    </nav>
	<section>
        @yield('login')
        @yield('register')
        @yield('create')
        @yield('construccion') 
        @section('content')
        @yield('section')
	</section>
    <footer class="conteiner-fluid">
        <div class="container-fluid">
            <a id="boton" href="/"><img class="img_f" src="imagenes/logo.JPEG"/></a>
            <div class="row">
                <div class="col-12 col-lg-6"> 
                    San juan #162 col. Aramara 1 C.P. 63173<br />
                    universidad@uiv.edu.mx
                </div>
                <div class="col-12 col-lg-6">
                    Buscanos en redes sociales<br />
                    Facebook: Universidad uiv OFICIAL<br />
                    Telefono: 2553112413 EXT.12
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright &copy;;2022 Universidad UIVWebsite</p>
        </div>
    </footer>
        <!-- Bootstrap core JS-->
        <script src="libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</body>
</html>
 
		 
	
	 