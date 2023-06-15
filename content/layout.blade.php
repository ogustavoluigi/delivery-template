<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{storage('/libs/bootstrap-5.2.3/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        :root{
            --bs-primary: #9c76a0;
            --bs-primary-rgb: 156,118,160;
        }
        .btn-primary {
            --bs-btn-color: #fff;
            --bs-btn-bg: #9c76a0;
            --bs-btn-border-color: #9c76a0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container">
            <a class="navbar-brand text-light" href="#">Bolos Vovó Dag</a>
            <div style="z-index: 2000;">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
                        <ul class="dropdown-menu dropdown-menu-light">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="sticky-top navbar navbar-expand-lg bg-light">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#bolos-cafe-section">Bolos para Café</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#bolos-gelados-section">Bolos Gelados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pudim-section">Pudim</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <script src="{{storage('/libs/bootstrap-5.2.3/bootstrap.bundle.min.js')}}" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>