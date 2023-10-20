<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="icon" type="image/png" href="{{ asset('/plugin/images/msig/logo_small2.png') }}">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/plugin/vendors/icofont.css') }}">

    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/plugin/vendors/themify.css') }}">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/plugin/css/flag-icon.css') }}">

    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/plugin/css/feather-icon.css') }}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/plugin/css/bootstrap.css') }}">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/plugin/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/custom.css') }}">

    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/plugin/css/responsive.css') }}">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-5">
                <img class="bg-img-cover bg-center" src="{{ asset('/plugin/images/login/2.jpg') }}" alt="looginpage">
            </div>
            <div class="col-xl-7 p-0">
                <div class="login-card login-dark">
                    <div>
                        <div>
                            <a class="logo text-start" href="index.html">
                                <img class="img-fluid for-light logo-msig-login"
                                    src="{{ asset('/plugin/images/msig/logo.png') }}" alt="looginpage">
                                <img class="img-fluid for-dark logo-msig-login"
                                    src="{{ asset('/plugin/images/msig/logo.png') }}" alt="looginpage">
                            </a>
                        </div>

                        <div class="login-main">
                            <form class="theme-form" action="{{ route('post.login') }}" method="POST" enctype="multipart/form-data">

                                <h4>Sign in to account</h4>
                                <p>Enter your email & password to login</p>

                                @csrf
                                <div class="form-group">
                                    <label class="col-form-label">User Name</label>
                                    <input class="form-control" name="username" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <div class="form-input position-relative">
                                        <input class="form-control" type="password" name="password" required=""
                                            placeholder="*********">
                                    </div>
                                </div>
                                <div class="form-group mb-0 mt-4">
                                    <button class="btn btn-login btn-block w-100" type="submit">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- latest jquery-->
<script src="{{ asset('/plugin/js/jquery.min.js') }}"></script>

<!-- Bootstrap js-->
<script src="{{ asset('/plugin/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('/plugin/js/config.js') }}"></script>

<script src="{{ asset('/plugin/js/script.js') }}"></script>

</html>
