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
</head>
<body style="background-color: #a4a4a4">

<!-- header -->
<header class="header-wrapper">
    <div class="d-flex justify-content-around">

        <div class="dropdown d-flex">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2"
                    data-bs-toggle="dropdown" aria-expanded="false">
                <h3>Usuaris</h3>
            </button>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                <li><a class="dropdown-item" href="/users">Gestio d'usuaris</a></li>
            </ul>
        </div>
        <div class="dropdown d-flex">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2"
                    data-bs-toggle="dropdown" aria-expanded="false">
                <h3>Jocs</h3>
            </button>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                <li><a class="dropdown-item" href="/">Tots els jocs</a></li>
                <li><a class="dropdown-item" href="/games">Gestio de jocs</a></li>
                <li><a class="dropdown-item" href="/rooms">Gestio de les habitacions</a></li>
            </ul>
        </div>

        <h1 class="text-uppercase fw-bold">Escape Room</h1>

        <div class="dropdown d-flex">
            <button class="reserves btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2"
                    data-bs-toggle="dropdown" aria-expanded="false">
                <h3>Reserves</h3>
            </button>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                <li><a class="dropdown-item" href="/reservations">Gestio de reserves</a></li>
            </ul>
        </div>
        <div class="dropdown d-flex">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2"
                    data-bs-toggle="dropdown" aria-expanded="false">
                <h3>Altres</h3>
            </button>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                <li><a class="dropdown-item" href="/reviews">Gestio de experiencies</a></li>
            </ul>
        </div>
    </div>
</header>

<!-- content -->
@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
