<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Espire - Admin Dashboard Template</title>

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
                                        <img alt="logo" class="img-fluid" src="../../user/images/logo.png" style="height: 70px;">
                                      
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <h3 class="fw-bolder">Regsiter</h3>
                                    <p class="text-muted">Register untuk mengisi formulir pendaftaran!</p>
                                </div>
                                <form action="{{ route('pendaftar.dashboard') }}">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Username</label>
                                        <input type="text"
                                            class="form-control no-validation-icon no-success-validation"
                                            name="username">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email"
                                            class="form-control no-validation-icon no-success-validation"
                                            name="email">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password"
                                            class="form-control no-validation-icon no-success-validation"
                                            name="password">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label">Confirm Password</label>
                                        <input type="password"
                                            class="form-control no-validation-icon no-success-validation"
                                            name="confirmPassword">
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
