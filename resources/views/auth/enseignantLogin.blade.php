<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Codescandy" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("assets/images/favicon/favicon.ico")}}" />

    <!-- darkmode js -->
    <script src="{{asset("assets/js/vendors/darkMode.js")}}"></script>

    <!-- Libs CSS -->
    <link href="{{asset("assets/fonts/feather/feather.css")}}" rel="stylesheet" />
    <link href="{{asset("assets/libs/bootstrap-icons/font/bootstrap-icons.min.css")}}" rel="stylesheet" />
    <link href="{{asset("assets/libs/simplebar/dist/simplebar.min.css")}}" rel="stylesheet" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset("assets/css/theme.min.css")}}">

    <link rel="canonical" href="https://geeksui.codescandy.com/geeks/pages/sign-in.html">
    <title>Sign in | Geeks - Bootstrap 5 Template</title>
</head>

<body>
<!-- Page content -->
<main>
    <section class="container d-flex flex-column vh-100">
        <div class="row align-items-center justify-content-center g-0 h-lg-100 py-8">
            <div class="col-lg-5 col-md-8 py-8 py-xl-0">
                <!-- Card -->
                <div class="card shadow">
                    <!-- Card body -->
                    <div class="card-body p-6">
                        <div class="mb-4">
                            <a href="../index.html"><img src="{{asset("assets/images/brand/logo/logo-icon.svg")}}" class="mb-4" alt="logo-icon"></a>
                            <h1 class="mb-1 fw-bold">Connecter-Vous</h1>
                            {{-- <span>
                                 Don’t have an account?
                                 <a href="sign-up.html" class="ms-1">Sign up</a>
                             </span>--}}
                        </div>
                        <!-- Form -->
                        <form method="POST" action="{{ route('authenticate.login') }}">
                            @csrf
                            <!-- Username -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email address here" required>
                                <div class="invalid-feedback">Please enter valid Email.</div>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" @error('email') is-invalid @enderror" class="form-control" name="password" placeholder="**************" required>
                                <div class="invalid-feedback">Please enter valid password.</div>
                            </div>
                            <!-- Checkbox -->
                            <div class="d-lg-flex justify-content-between align-items-center mb-4">
                                {{--<div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="rememberme" required>
                                    <label class="form-check-label" for="rememberme">Remember me</label>
                                    <div class="invalid-feedback">You must agree before submitting.</div>
                                </div>--}}
                                <div>
                                    <a href="forget-password.html">Forgot your password?</a>
                                </div>
                            </div>
                            <div>
                                <!-- Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="position-absolute bottom-0 m-4">
        <div class="dropdown">
            <button class="btn btn-light btn-icon rounded-circle d-flex align-items-center" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
                <i class="bi theme-icon-active"></i>
                <span class="visually-hidden bs-theme-text">Toggle theme</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bs-theme-text">
                <li>
                    <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                        <i class="bi theme-icon bi-sun-fill"></i>
                        <span class="ms-2">Light</span>
                    </button>
                </li>
                <li>
                    <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                        <i class="bi theme-icon bi-moon-stars-fill"></i>
                        <span class="ms-2">Dark</span>
                    </button>
                </li>
                <li>
                    <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                        <i class="bi theme-icon bi-circle-half"></i>
                        <span class="ms-2">Auto</span>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</main>
<!-- Scripts -->
<!-- Libs JS -->
<script src="{{asset("assets/libs/@popperjs/core/dist/umd/popper.min.js")}}"></script>
<script src="{{asset("assets/libs/bootstrap/dist/js/bootstrap.min.js")}}"></script>
<script src="{{asset("assets/libs/simplebar/dist/simplebar.min.js")}}"></script>

<!-- Theme JS -->
<script src="{{asset("assets/js/theme.min.js")}}"></script>

<script src="{{asset("assets/js/vendors/validation.js")}}"></script>
</body>
</html>

