<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Santri - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/images/logo/favicon.ico">

    <!-- page css -->

    <!-- Core css -->
    <link href="../../assets/css/app.min.css" rel="stylesheet">

</head>

<body>
    <div class="layout">
        <div class="vertical-layout">
            <!-- Header START -->
            @include('pendaftar.layout.header')
            <!-- Header END -->
            <!-- Side Nav START -->
            @include('pendaftar.layout.sidebar')
            <!-- Side Nav END -->
            <!-- Content START -->
            <div class="content">
                <div class="main">
                    @yield('content')
                </div>
                <!-- Footer START -->
                <div class="footer">
                    <div class="footer-content">
                        <p class="mb-0">Copyright © 2021 Theme_Nate. All rights reserved.</p>
                        <span>
                            <a href="" class="text-gray me-3">Term &amp; Conditions</a>
                            <a href="" class="text-gray">Privacy &amp; Policy</a>
                        </span>
                    </div>
                </div>
                <!-- Footer End -->
            </div>
            <!-- Content END -->
        </div>
    </div>
    <!-- Core Vendors JS -->
    <script src="../../assets/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="../../assets/js/app.min.js"></script>

</body>
