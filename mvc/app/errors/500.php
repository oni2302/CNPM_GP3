<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>500-Server Error</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="500-Server Error">
    <meta name="author" content="ONI">
    <meta name="description" content="Dự án gara xe nhóm 3">
    <meta name="keywords" content="gara xe,hcm,gara xe hcm" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo _WEB_ROOT; ?>/app/public/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo _WEB_ROOT; ?>/app/public/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo _WEB_ROOT; ?>/app/public/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo _WEB_ROOT; ?>/app/public/assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo _WEB_ROOT; ?>/app/public/assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Sweet Alert -->
    <link type="text/css" href="<?php echo _WEB_ROOT; ?>/app/public/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="<?php echo _WEB_ROOT; ?>/app/public/vendor/notyf/notyf.min.css" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="<?php echo _WEB_ROOT; ?>/app/public/assets/css/volt.css" rel="stylesheet">

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>
<body><main>
        <section class="vh-100 d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-12 col-lg-5 order-2 order-lg-1 text-center text-lg-left">
                        <h1 class="mt-5">Lỗi máy chủ...<span class="text-primary">Hết</span> tiền!</h1>
                        <p class="lead my-4">Làm không công mà đòi host xịn, đưa tiền đây là web mượt ngay :))</p>
                        <a href="<?php echo _WEB_ROOT;?>/home/index" class="btn btn-gray-800 d-inline-flex align-items-center justify-content-center mb-4">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
                            Quay về trang chủ
                        </a>       
                        <p class="my-4">Chi tiết lỗi máy chủ: <?php echo '<br>';echo (!empty($message))?$message:'Chả biết nữa nói chung là lỗi database'; ?></p>
                    </div>
                    <div class="col-12 col-lg-7 order-1 order-lg-2 text-center d-flex align-items-center justify-content-center">
                        <img class="img-fluid w-75" src="<?php echo _WEB_ROOT;?>/app/public/assets/img/illustrations/500.svg" alt="500 Server Error">
                    </div>
                </div>
            </div>
        </section>
    </main>
<!--#region Scripts-->

    <!-- Core -->
    <script src="<?php echo _WEB_ROOT; ?>/app/public/vendor/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/app/public/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Vendor JS -->
    <script src="<?php echo _WEB_ROOT; ?>/app/public/vendor/onscreen/dist/on-screen.umd.min.js"></script>

    <!-- Slider -->
    <script src="<?php echo _WEB_ROOT; ?>/app/public/vendor/nouislider/dist/nouislider.min.js"></script>

    <!-- Smooth scroll -->
    <script src="<?php echo _WEB_ROOT; ?>/app/public/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- Charts -->
    <script src="<?php echo _WEB_ROOT; ?>/app/public/vendor/chartist/dist/chartist.min.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/app/public/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

    <!-- Datepicker -->
    <script src="<?php echo _WEB_ROOT; ?>/app/public/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

    <!-- Sweet Alerts 2 -->
    <script src="<?php echo _WEB_ROOT; ?>/app/public/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

    <!-- Moment JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

    <!-- Vanilla JS Datepicker -->
    <script src="<?php echo _WEB_ROOT; ?>/app/public/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

    <!-- Notyf -->
    <script src="<?php echo _WEB_ROOT; ?>/app/public/vendor/notyf/notyf.min.js"></script>

    <!-- Simplebar -->
    <script src="<?php echo _WEB_ROOT; ?>/app/public/vendor/simplebar/dist/simplebar.min.js"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Volt JS -->
    <script src="<?php echo _WEB_ROOT; ?>/app/public/assets/js/volt.js"></script>

<!--#endregion-->
</body>

</html>
