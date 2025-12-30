<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="robots" content="noindex, nofollow">
    <title>Texon Admin Panel</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Feather CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/icons/feather/feather.css') }}">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/tabler-icons/tabler-icons.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        .login-background::before {
            content: "";
            background: linear-gradient(180deg, #f4b41a 0%, #143d59 100%);
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            backdrop-filter: blur(6px);
        }
    </style>
</head>

<body class="bg-white">

    <div id="global-loader" style="display: none;">
        <div class="page-loader"></div>
    </div>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <div class="container-fuild">
            <div class="w-100 overflow-hidden position-relative flex-wrap d-block vh-100">
                <div class="row">
                    <div class="col-lg-5">
                        <div
                            class="login-background position-relative d-lg-flex align-items-center justify-content-center d-none flex-wrap vh-100">
                            <div class="bg-overlay-img">
                                <img src="https://smarthr.co.in/demo/html/template/assets/img/bg/bg-01.png"
                                    class="bg-1" alt="Img">
                                <img src="https://smarthr.co.in/demo/html/template/assets/img/bg/bg-02.png"
                                    class="bg-2" alt="Img">
                                <img src="https://smarthr.co.in/demo/html/template/assets/img/bg/bg-03.png"
                                    class="bg-3" alt="Img">
                            </div>
                            <div class="authentication-card w-100">
                                <div class="authen-overlay-item border w-100">
                                    <h1 class="text-white display-1">Welcome to Our CRM System</h1>
                                    <div class="my-4 mx-auto authen-overlay-img">
                                        <img src="https://adrack.com/wp-content/uploads/2021/12/signup.png"
                                            alt="Img">
                                    </div>
                                    <div>
                                        <p class="text-white fs-20 fw-semibold text-center">Efficiently manage your
                                            workforce, streamline <br> operations effortlessly.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <div class="row justify-content-center align-items-center vh-100 overflow-auto flex-wrap">
                            <div class="col-md-7 mx-auto vh-100">
                                <form action="{{ route('login.store') }}" method="POST" class="vh-100">
                                    @csrf
                                    <div class="vh-100 d-flex flex-column justify-content-between p-4 pb-0">
                                        <div class=" mx-auto mb-5 text-center">
                                            <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid" alt="Logo">
                                        </div>
                                        <div class="">
                                            <div class="text-center mb-3">
                                                <h2 class="mb-2">Sign In</h2>
                                                <p class="mb-0">Please enter your details to sign in</p>
                                            </div>
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul class="mb-0">
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <div class="mb-3">
                                                <label class="form-label">Email Address</label>
                                                <div class="input-group">
                                                    <input type="email" name="email" value="{{ old('email') }}"
                                                        class="form-control border-end-0" required>
                                                    <span class="input-group-text border-start-0">
                                                        <i class="ti ti-mail"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Password</label>
                                                <div class="pass-group">
                                                    <input type="password" name="password"
                                                        class="pass-input form-control" required>
                                                    <span class="ti toggle-password ti-eye-off"></span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="form-check form-check-md mb-0">
                                                        <input class="form-check-input" name="remember" id="remember_me"
                                                            type="checkbox">
                                                        <label for="remember_me" class="form-check-label mt-0">Remember
                                                            Me</label>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <a href="https://smarthr.co.in/demo/html/template/forgot-password.html"
                                                        class="link-danger">Forgot Password?</a>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-primary w-100">Sign In</button>
                                            </div>
                                            <div class="text-center">
                                                <h6 class="fw-normal text-dark mb-0">Don’t have an account?
                                                    <a href="{{ route('register') }}" class="hover-a"> Create
                                                        Account</a>
                                                </h6>
                                            </div>

                                        </div>
                                        <div class="mt-5 pb-4 text-center">
                                            <p class="mb-0 text-gray-9">Copyright &copy; 2025 - Texon</p>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Feather Icon JS -->
    <script src="{{ asset('assets/js/feather.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"version":"2024.11.0","token":"d05194593ce14c8fa5c20a9737ff5d07","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
        crossorigin="anonymous"></script>
</body>


</html>
