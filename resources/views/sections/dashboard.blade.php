<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Dashboard</title>
    <link rel="icon" type="image/png" href="{{ url('/plugin/images/msig/logo_small2.png') }}">

    @livewireStyles

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ url('/plugin/css/bootstrap.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ url('/plugin/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/plugin/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ url('/css/custom.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ url('/plugin/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/plugin/css/toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/plugin/css/animate.css') }}">

</head>

<body>
    <div class="landing-page">
        <div class="landing-home">
            <div class="container-fluid">
                <div class="sticky-header">
                    <header>
                        <nav class="navbar navbar-b navbar-dark navbar-trans navbar-expand-xl fixed-top nav-padding"
                            id="sidebar-menu">

                            <div class="container-fluid">
                                <a class="navbar-brand p-0" href="#">
                                    <img class="img-fluid" src="{{ url('/plugin/images/msig/logo.png') }}">
                                </a>

                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <form class="d-flex">
                                        <input class="form-control me-3" type="search" placeholder="Search"
                                            aria-label="Search">
                                    </form>

                                    <ul class="navbar-nav d-flex">
                                        <li class="nav-item dropdown">
                                            @if (Auth::user())
                                                <a class="nav-link ms-4 me-auto" href="#" id="navbarDropdown"
                                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                    {{ Auth::user()->fullname }}
                                                    <span>
                                                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                                                    </span>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <li>
                                                        <a class="dropdown-item" href="{{url('web')}}">
                                                            Admin menu
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="{{ url('/logout') }}">
                                                            Log out
                                                        </a>
                                                    </li>
                                                </ul>
                                            @else
                                                <div class="d-flex">
                                                    <a href="{{ route('login') }}" class="btn btn-msig-blue">
                                                        Login
                                                    </a>
                                                </div>
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </header>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-sm-10">
                        <div class="content text-center">
                            <div>
                                <h1 class="wow fadeIn">List Webs</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section-space feature-section pt-0 mt-4">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="feature-box common-card bg-feature-1">
                            <div class="feature-icon">
                                <img src="../assets/images/landing/feature-icon/1.svg" alt="">
                            </div>
                            <h5>Quality & Clean Code</h5>
                            <p class="mb-0 f-light">
                                All you need to know of using clean code as a manager to
                                make your team and your software awesome.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

@livewireScripts

<script src="{{ url('/plugin/js/jquery.min.js') }}"></script>
<script src="{{ url('/plugin/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ url('/plugin/js/icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ url('/plugin/js/icons/feather-icon/feather-icon.js') }}"></script>

<script src="{{ url('/plugin/js/animation/wow/wow.min.js') }}"></script>
<script src="{{ url('/plugin/js/landing_sticky.js') }}"></script>
<script src="{{ url('/plugin/js/landing.js') }}"></script>

</html>
