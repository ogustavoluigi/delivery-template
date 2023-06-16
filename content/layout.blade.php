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
            --bs-primary: #5C3523;
            --bs-primary-rgb: 92,53,35;
            --bs-secondary: #e5dbd0;
            --bs-secondary-rgb: 229,219,208;
        }
        .btn-primary {
            --bs-btn-color: #fff;
            --bs-btn-bg: #5c3523;
            --bs-btn-border-color: #5c3523;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container justify-content-center">
            <a class="navbar-brand text-light" href="#">
                <img src="{{storage('assets/home/logo.png')}}" alt="">
            </a>
        </div>
    </nav>
    <nav class="sticky-top navbar navbar-expand-lg bg-primary">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-secondary" aria-current="page" href="#bolos-cafe-section">Bolos para Café</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#bolos-gelados-section">Bolos Gelados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#pudim-section">Pudim</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <script src="{{storage('/libs/bootstrap-5.2.3/bootstrap.bundle.min.js')}}" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>