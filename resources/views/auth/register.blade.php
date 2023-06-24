<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pondok - Register</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/images/logo/favicon.ico">

    <!-- page css -->

    <!-- Core css -->
    <link href="../../assets/css/app.min.css" rel="stylesheet">

</head>

<body>
    <div class="auth-full-height d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="m-2">
                                <div class="d-flex justify-content-center mt-3">
                                    <div class="text-center logo">
                                        <img alt="logo" class="img-fluid" src="assets/images/logo/logo-fold.png" style="height: 70px;">
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <h3 class="fw-bolder">Register</h3>
                                    <p class="text-muted">Register untuk memulai pendaftaran!</p>
                                </div>
                                <form action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label class="form-label">Nama Lengkap</label>
                                        <input
                                            type="text"
                                            class="form-control no-validation-icon no-success-validation"
                                            name="name" required
                                        >
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label">Email</label>
                                        <input
                                            type="email"
                                            class="form-control no-validation-icon no-success-validation"
                                            name="email" required
                                        >
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label">Password</label>
                                        <input
                                            type="password"
                                            class="form-control no-validation-icon no-success-validation"
                                            name="password" required autocomplete="new-password"
                                        >
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label">Ulangi Password</label>
                                        <input
                                            type="password"
                                            class="form-control no-validation-icon no-success-validation"
                                            name="password_confirmation"
                                            required autocomplete="new-password"
                                        >
                                    </div>
                                    <button class="btn btn-primary d-block w-100" type="submit">Register</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Vendors JS -->
    <script src="../../assets/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="../../assets/js/app.min.js"></script>

</body>

</html>
