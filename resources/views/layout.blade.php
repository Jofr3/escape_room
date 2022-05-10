<!doctype html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Escape room</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/header.css">
    <link rel="stylesheet" href="/main.css">
    <link rel="stylesheet" href="/usuaris.css">
    <link rel="stylesheet" href="/edita.css">
    <link rel="stylesheet" href="/index.css">
</head>
<body style="background-color: #a4a4a4">

<!-- header -->
<header class="header-wrapper">
    <div class="d-flex justify-content-around">

        @if(auth()->user() != null && auth()->user()->role == '2')
            <div class="dropdown d-flex">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2"
                        data-bs-toggle="dropdown" aria-expanded="false">
                    <h3>Usuaris</h3>
                </button>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                    <li><a class="dropdown-item" href="/users">Gestio d'usuaris</a></li>
                </ul>
            </div>
        @endif

        <div class="dropdown d-flex">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2"
                    data-bs-toggle="dropdown" aria-expanded="false">
                <h3>Jocs</h3>
            </button>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                <li><a class="dropdown-item" href="/main">Tots els jocs</a></li>

                @if(auth()->user() != null && auth()->user()->role == '1')
                    <li><a class="dropdown-item" href="/reservations/make">Fer una reserva</a></li>
                @endif

                @if(auth()->user() != null && auth()->user()->role == '2')
                    <li><a class="dropdown-item" href="/games">Gestio de jocs</a></li>
                    <li><a class="dropdown-item" href="/rooms">Gestio de les habitacions</a></li>
                @endif
            </ul>
        </div>

        <h1 class="text-uppercase fw-bold">Escape Room</h1>

        @if(auth()->user() == null)
            <div class="dropdown d-flex">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2"
                        style="width: 147px;"
                        data-bs-toggle="dropdown" aria-expanded="false">
                    <h3>Convidat</h3>
                </button>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                    <li><a class="dropdown-item" href="/signup">Sign-up</a></li>
                    <li><a class="dropdown-item" href="/">Log-in</a></li>
                </ul>
            </div>
        @endif

        @if(auth()->user() != null && auth()->user()->role == '1')
            <div class="dropdown d-flex">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2"
                        data-bs-toggle="dropdown" aria-expanded="false">
                    <h3>Conta</h3>
                </button>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                    <li><a class="dropdown-item" href="/account">La meva conta</a></li>
                    <li><a class="dropdown-item" href="/reservations">Les meves reserves</a></li>
                    <li><a class="dropdown-item" href="/logout">Log-out</a></li>
                </ul>
            </div>
        @endif

        @if(auth()->user() != null && auth()->user()->role == '2')
            <div class="dropdown d-flex">
                <button class="reserves btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2"
                        data-bs-toggle="dropdown" aria-expanded="false">
                    <h3>Reserves</h3>
                </button>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                    <li><a class="dropdown-item" href="/reservations">Gestio de reserves</a></li>
                    <li><a class="dropdown-item" href="/confirmReservations">Confirma reserves</a></li>
                </ul>
            </div>
        @endif


        @if(auth()->user() != null && auth()->user()->role == '2')
            <div class="dropdown d-flex">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2"
                        data-bs-toggle="dropdown" aria-expanded="false">
                    <h3>Altres</h3>
                </button>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                    <li><a class="dropdown-item" href="/reviews">Gestio de experiencies</a></li>
                    <li><a class="dropdown-item" href="/logout">Log-out</a></li>
                </ul>
            </div>
        @endif
    </div>
</header>

<!-- content -->
@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
