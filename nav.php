<head>
    <link rel="icon" type="image/png" href="assets/img/smn.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <style>
        .navbar {
            background-color: #3b3367;
        }

        .navbar .navbar-brand {
            color: #ecf0f1;
        }

        .navbar .navbar-brand:hover,
        .navbar .navbar-brand:focus {
            color: #ecdbff;
        }

        .navbar .navbar-text {
            color: #ecf0f1;
        }

        .navbar .navbar-text a {
            color: #ecdbff;
        }

        .navbar .navbar-text a:hover,
        .navbar .navbar-text a:focus {
            color: #ecdbff;
        }

        .navbar .navbar-nav .nav-link {
            color: #ecf0f1;
            border-radius: .25rem;
            margin: 0 0.25em;
        }

        .navbar .navbar-nav .nav-link:not(.disabled):hover,
        .navbar .navbar-nav .nav-link:not(.disabled):focus {
            color: #ecdbff;
        }
    </style>

</head>
<nav class="navbar fixed-top navbar-light">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Biblioteca</a>
        </div>
        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
        <a href="ingresar.php" class="nav-link">Agregar Libro</a>
        <a href="mostrar.php" class="nav-link">Lista de Libros</a>
        <a href="reset-password.php" class="nav-link">Reset Contraseña </a>
        <a href="logout.php" class="nav-link">Salir de la sesion</a>
    </div>
</nav>