<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/app.css" media="screen" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<body class="bg-secondary-subtle">
    <div class="bg-danger w-100">
        <nav class="navbar navbar-expand-lg bg-danger">
            <div class="row align-middle columns-2">
                <div class="col bg-white">
                    <a class="navbar-brand text-danger" href="{{route('site.index')}}">
                        <img src="{{ asset('storage/logoetec.png') }}" alt="Logo" width="100" height="100" class="d-inline-block align-text-bottom">
                    </a>
                </div>
                <div class="col">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{route('site.index')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{route('site.cursos')}}">Cursos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{route('site.departamentos')}}">Departamentos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{route('site.contato')}}">Contato</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="col container bg-white">
        <div class="row">
            <div class="carousel">
                <div class="carousel-item active">
                    <img src="{{ asset('storage/fundotartaruga.jpg') }}" height="350" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>

        <div class="row">
            <h3 class="pt-3 ps-3">Turtle.com: o site para fãs de tartarugas</h3>
            <p class="mx-2">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>
</body>
</html>