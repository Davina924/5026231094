<!DOCTYPE html>
<html lang="en">

<head>
    <title>Davina Almeira : 5026231094</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .jumbotron {
            background-color: #9de2e2;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 0;
        }

        .navbar {
            justify-content: center;
            margin-top: 0;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .nav-link {
            transition: all 0.3s ease;
            margin: 0 10px;
            color: #333 !important;
        }

        .nav-link:hover {
            color: #9de2e2 !important;
            transform: translateY(-2px);
        }

        .navbar-nav {
            display: flex;
            justify-content: center;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="jumbotron text-center mx-auto">
        <h1 class="m-0">5026231094 : Davina Almeira</h1>
    </div>

    <nav class="navbar navbar-expand-sm bg-light text-center">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/frontend">All Front End</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pegawai">Pegawai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/snack">Tugas CRUD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">EAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/latihan1">Latihan 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Latihan 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Latihan 3</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <div class="container">
        @yield('content')
    </div>

</body>

</html>
