<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title><?php echo $page_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="<?php echo $page_title; ?>">
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
<body>
<?php
    $this->render('blocks/index_header');
    $this->render($content);
    $this->render('blocks/index_footer');
?>















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