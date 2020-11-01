<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <!--BARRA DE NAVEGACIÓN-->
    <div class="navbar-fixed animate__animated animate__bounce">
        <nav class="blue darken-4">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo"><img style="width: 50px; height: 50px; margin-top: 10px; margin-left: 10px;" class="responsive-img left" src="img/Logo Blanco.png" alt=""><span class="hide-on-small-only">Unimar con todos</span></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="{{route('inicio')}}"><i class="material-icons left">home</i> Inicio</a></li>
                    <li><a href="{{route('posts')}}"><i class="material-icons left">library_books</i> Posts</a></li>
                    <li><a class="dropdown-trigger" data-target='Valores' href="#"><i class="material-icons left">grade</i> Valores</a></li>
                    <li><a href="ayuda.html"><i class="material-icons left">help</i> Ayuda</a></li>
                    <li><a href="{{route('actividades')}}"><i class="material-icons left">help</i> Actividades</a></li>
                </ul>
            </div>
        </nav>
    </div>
     <!--Desplegable de valores-->
    <ul id='Valores' class='dropdown-content'>
        <li><a class="blue-text text-darken-4" href="valoresSociedad.html">En la sociedad</a></li>
        <li><a class="blue-text text-darken-4" href="valoresPandiemia.html">Frente la pandemia</a></li>
    </ul>

    <!--BARRA DE NAVEGACIÓN PARA MOBILE-->
    <ul class="sidenav" id="mobile-demo">
        <li><a href="index.html"><i class="blue-text text-darken-4 material-icons left">home</i> Inicio</a></li>
        <li><a href="#"><i class="blue-text text-darken-4 material-icons left">library_books</i> Posts</a></li>
        <li><a class="dropdown-trigger" data-target='Valores-mobile' href="#"><i class="blue-text text-darken-4 material-icons left">grade</i> Valores</a></li>
        <li><a href="ayuda.html"><i class="blue-text text-darken-4 material-icons left">help</i> Ayuda</a></li>
    </ul>

    <!--Desplegable de valores MOBILE-->
    <ul id='Valores-mobile' class='dropdown-content'>
        <li><a class="blue-text text-darken-4" href="valoresSociedad.html">En la sociedad</a></li>
        <li><a class="blue-text text-darken-4" href="valoresPandiemia.html">Frente la pandemia</a></li>
    </ul>


    @yield('cuerpo')


    <!--FOOTER-->
    <footer class="page-footer blue darken-4">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Recuerda</h5>
                    <p class="grey-text text-lighten-4">¿Cuál es la escencia de la vida? Servir a otros y hacer el bien.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="http://www.unimar.edu.ve/unimarportal/index.php">Universidad de Margarita</a></li>
                        <li><a class="grey-text text-lighten-3" href="http://www.unimar.edu.ve/unimarportal/universidad/servicio-comunitario.php">Servicio Comunitario UNIMAR</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container center">
                © 2020 Servicio Comunitario Proyecto Unimar con Todos Diegbys Mudarra Mauricio Bisogno
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>