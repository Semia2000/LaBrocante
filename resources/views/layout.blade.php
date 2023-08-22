<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>La brocante</title>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="{{ asset("assets/images/Logo 1.png") }}" alt="Bootstrap" width="200" height="70">
            </a>
            <div class="recherche">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Articles
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <form class="d-flex" role="search"><input class="form-control me-2" type="search" placeholder="Rechercher des articles" aria-label="Search">
            </form>
            </div>
            <div class="menus">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('detailproduit') }}">Vendre un article</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('bienvenue') }}">S'incrire <i class=""><img src="{{ asset("assets/images/user-solid1.png") }}" alt=""></i></a>
                </li>
              </ul>
            </div>
        </nav>
        @yield('content')
    </body>

</html>
