<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Dashboard</title>
    <link rel="icon" type="image/png" href="{{ asset('/plugin/images/msig/logo_small2.png') }}">

    @livewireStyles

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('/plugin/css/bootstrap.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/plugin/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/plugin/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/custom.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/plugin/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/plugin/css/toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/plugin/css/animate.css') }}">

</head>

<body>
    <div class="landing-page">
        <nav class="navbar navbar-light" style="background: #7a7497">
            <div class="container-fluid">
                <a class="navbar-brand p-0 ms-2" href="#">
                    <img class="img-fluid" src="{{ asset('/plugin/images/msig/logo.png') }}">
                </a>

                <li class="nav-item dropdown d-flex me-5">
                    @if (Auth::user())
                        <a class="nav-link ms-4 me-auto" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" style="color: white">

                            {{ Auth::user()->fullname }}
                            <span>
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ url('web') }}">
                                    Admin menu
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('logout') }}">
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
            </div>
        </nav>

        @livewire('dashboard-web')
    </div>
</body>

@livewireScripts

<script src="{{ asset('/plugin/js/jquery.min.js') }}"></script>
<script src="{{ asset('/plugin/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('/plugin/js/icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ asset('/plugin/js/icons/feather-icon/feather-icon.js') }}"></script>

<script src="{{ asset('/plugin/js/animation/wow/wow.min.js') }}"></script>
<script src="{{ asset('/plugin/js/landing_sticky.js') }}"></script>
<script src="{{ asset('/plugin/js/landing.js') }}"></script>

</html>
