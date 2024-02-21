
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

    <link rel="canonical" href="https://geeksui.codescandy.com/geeks/pages/sign-up.html">
    <title>Sign up | Geeks - Bootstrap 5 Template</title>
</head>

<body>
<!-- Page content -->
<main>
    <section class="container d-flex flex-column vh-100">
        <div class="row align-items-center justify-content-center g-0 h-lg-100 py-8">
            <div class="col-lg-7 col-md-10 py-8 py-xl-0">
                <!-- Card -->
                <div class="card shadow">
                    <!-- Card body -->
                    <div class="card-body p-6">
                        <div class="mb-4">
                            <a href="../index.html"><img src="{{asset("assets/images/brand/logo/logo-icon.svg")}}" class="mb-4" alt="logo"></a>
                            <h1 class="mb-1 fw-bold">Sign up</h1>
                            <span>
                                Already have an account?
                                <a href="sign-in.html" class="ms-1">Sign in</a>
                            </span>
                        </div>
                        <!-- Form -->
                        <form method="POST" action="{{ route('register.etu.create') }}" class="needs-validation" novalidate>
                            @csrf
                            <div class="row">
                                <!-- Username -->
                                <div class="mb-3 col-md-6">
                                    <label for="nom" class="form-label">Nom<span class="text-danger">*</span></label>
                                    <input type="text" id="nom" class="form-control" name="nom" placeholder="Nom" required >
                                    <div class="invalid-feedback">Please enter valid nom.</div>
                                </div>
                                <!-- Email -->
                                <div class="mb-3 col-md-6">
                                    <label for="prenom" class="form-label">Prenom<span class="text-danger">*</span></label>
                                    <input type="text" id="prenom" class="form-control" name="prenom" placeholder="Prenom" required >
                                    <div class="invalid-feedback">Please enter valid prenom.</div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Username -->
                                <div class="mb-3 col-md-6">
                                    <label for="adresse" class="form-label">Adresse<span class="text-danger">*</span></label>
                                    <input type="text" id="adresse" class="form-control" name="adresse" placeholder="Adresse" required >
                                    <div class="invalid-feedback">Please enter valid adresse.</div>
                                </div>
                                <!-- Email -->
                                <div class="mb-3 col-md-6">
                                    <label for="telephone" class="form-label">Telephone<span class="text-danger">*</span></label>
                                    <input type="text" id="telephone" class="form-control" name="telephone" placeholder="Numero" required >
                                    <div class="invalid-feedback">Please enter valid Numero.</div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Username -->
                                <div class="mb-3 col-md-6">
                                    <label for="ville" class="form-label">Ville<span class="text-danger">*</span></label>
                                    <input type="text" id="ville" class="form-control" name="ville" placeholder="Ville" required >
                                    <div class="invalid-feedback">Please enter valid ville.</div>
                                </div>
                                <!-- Email -->
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                                    <input type="email" id="email" class="form-control" name="email" placeholder="Email address here" required >
                                    <div class="invalid-feedback">Please enter valid Email.</div>
                                </div>
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password<span class="text-danger">*</span></label>
                                <input type="password" id="password" class="form-control" name="password" placeholder="**************" required >
                                <div class="invalid-feedback">Please enter valid password.</div>
                            </div>
                            <!-- Checkbox -->
                            <div class="mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="agreeCheck" required >
                                    <label class="form-check-label" for="agreeCheck">
                                        <span>
                                            I agree to the
                                            <a href="terms-condition-page.html">Terms of Service</a>
                                            and
                                            <a href="terms-condition-page.html">Privacy Policy.</a>
                                        </span>
                                    </label>
                                    <div class="invalid-feedback">You must agree before submitting.</div>
                                </div>
                            </div>
                            <div>
                                <!-- Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Creer un Compte</button>
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

