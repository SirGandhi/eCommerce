<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/main.css') }}" />
    <script src="https://kit.fontawesome.com/e44c6e790f.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <title>eCommerce Project</title>
</head>
<body>
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="{{url('/img/logo.svg')}}" alt="logo" class="img-fluid" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active position-relative">
                        <a class="nav-link px-0 font-weight-bold" href="/">Home</a>
                    </li>
                    <li class="nav-item active position-relative">
                        <a class="nav-link px-0 font-weight-bold" href="/product">Products</a>
                    </li>
                    <li class="nav-item position-relative">
                        <a class="nav-link px-0 font-weight-bold" href="https://codepen.io/LukeFarmer">Codepen</a>
                    </li>
                    <li class="nav-item position-relative">
                        <a class="nav-link px-0 font-weight-bold" href="#">GitHub</a>
                    </li>
                    <li class="nav-item position-relative">
                        <a class="nav-link px-0 font-weight-bold" href="#">Contact</a>
                    </li>
                    <li class="nav-item position-relative">
                        <a class="nav-link px-0 font-weight-bold" href="login">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
    {{ $slot }}
<footer class="pt-5">
    <div class="container text-md-left">
        <div class="row">
            <div class="col-md-6 mt-0 mt-3">
                <h5 class="text-uppercase">Footer Content</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <hr class="clearfix w-100 d-md-none pb-3">
            <div class="col-md-3 mb0 mb-3">

            </div>
            <div class="col-md-3 mb-0 mb-3">
                <h5 class="text-uppercase">Links</h5>
                <ul class="list-unstyled">
                <li>
                    <a href="#" class="text-decoration-none text-dark footer-link-indent">Template 1</a>
                </li>
                <li>
                    <a href="#" class="text-decoration-none text-dark">Template 2</a>
                </li>
                <li>
                    <a href="#" class="text-decoration-none text-dark">Template 3</a>
                </li>
                <li>
                    <a href="#" class="text-decoration-none text-dark">Template 4</a>
                </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center py-3">
            <small>© 2021 Copyright: Luke Farmer</small>
    </div>
</footer>
</body>
</html>