<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>
    @livewireStyles

    <link rel="icon" type="image/png" href="{{ asset('/plugin/images/msig/logo_small2.png') }}">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('/plugin/css/scrollbar.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/plugin/css/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/plugin/css/tagify.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/plugin/css/bootstrap.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/plugin/css/font-awesome.css') }}">

    {{-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> --}}

    <link rel="stylesheet" type="text/css" href="{{ asset('/plugin/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/custom.css') }}">

    {{-- datepicker --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/plugin/css/flatpickr.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/plugin/css/responsive.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/plugin/css/line-scale-pulse-out-rapid.css') }}">
</head>

<body>
    @auth
        {{-- Loader --}}
        {{-- <div class="loader-wrapper">
            <div class="loader-index"> <span></span></div>
            <svg>
                <defs></defs>
                <filter id="goo">
                    <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                    <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                    </fecolormatrix>
                </filter>
            </svg>
        </div> --}}

        <div class="loader-wrapper">
            <div style="color: #1B1464" class="la-line-scale-pulse-out-rapid la-2x">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>

        <div class="page-wrapper compact-wrapper" id="pageWrapper">
            {{-- header --}}
            @include('layouts.header')
            <div class="page-body-wrapper">
                {{-- sidebar --}}
                @include('layouts.side-menu')

                {{-- main content --}}
                @section('content')
                @show
            </div>
        </div>
    @endauth
</body>

@livewireScripts

<script src="{{ asset('/plugin/js/jquery.min.js') }}"></script>
<script src="{{ asset('/plugin/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('/plugin/js/icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ asset('/plugin/js/icons/feather-icon/feather-icon.js') }}"></script>

<script src="{{ asset('/plugin/js/scrollbar/simplebar.js') }}"></script>
<script src="{{ asset('/plugin/js/scrollbar/custom.js') }}"></script>

<script src="{{ asset('/plugin/js/config.js') }}"></script>
<script src="{{ asset('/plugin/js/sidebar.js') }}"></script>

{{-- select 2 --}}
<script src="{{ asset('/plugin/js/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('/plugin/js/select2/tagify.js') }}"></script>
<script src="{{ asset('/plugin/js/select2/tagify.polyfills.min.js') }}"></script>
<script src="{{ asset('/plugin/js/tagify-selector.js') }}"></script>

{{-- form validation --}}
<script src="{{ asset('/plugin/js/form-validation-custom.js') }}"></script>

{{-- datepicker --}}
<script src="{{ asset('/plugin/js/flat-pickr/flatpickr.js') }}"></script>
<script src="{{ asset('/plugin/js/flat-pickr/custom-flatpickr.js') }} "></script>

<script src=" {{ asset('/plugin/js/script.js') }}"></script>

<script>
    window.addEventListener('alert', event => {
        toastr[event.detail.type](event.detail.message,
            event.detail.title ?? ''), toastr.options = {
            "closeButton": true,
            "progressBar": true,
        }
    });
</script>

@stack('scripts')

</html>
