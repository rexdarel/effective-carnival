<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- STYLESHEETS -->
    <style type="text/css">
        [fuse-cloak],
        .fuse-cloak {
            display: none !important;
        }
    </style>

    <!-- Icons.css -->
    <link type="text/css" rel="stylesheet" href="/assets/icons/fuse-icon-font/style.css">

    <!-- Animate.css -->
    <link type="text/css" rel="stylesheet" href="/assets/vendor/animate.css/animate.min.css">

    <!-- PNotify -->
    <link type="text/css" rel="stylesheet" href="/assets/vendor/pnotify/pnotify.custom.min.css">

    <!-- Nvd3 - D3 Charts -->
    <link type="text/css" rel="stylesheet" href="/assets/vendor/nvd3/build/nv.d3.min.css"/>

    <!-- Perfect Scrollbar -->
    <link type="text/css" rel="stylesheet" href="/assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css"/>

    <!-- Fuse Html -->
    <link type="text/css" rel="stylesheet" href="/assets/vendor/fuse-html/fuse-html.min.css"/>

    <!-- Main CSS -->
    <link type="text/css" rel="stylesheet" href="/assets/css/main.css">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <!-- / STYLESHEETS -->

    <!-- JAVASCRIPT -->

    <!-- jQuery -->
    <script type="text/javascript" src="/assets/vendor/jquery/dist/jquery.min.js"></script>

    <!-- Mobile Detect -->
    <script type="text/javascript" src="/assets/vendor/mobile-detect/mobile-detect.min.js"></script>

    <!-- Perfect Scrollbar -->
    <script type="text/javascript"
            src="/assets/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>

    <!-- Popper.js -->
    <script type="text/javascript" src="/assets/vendor/popper.js/index.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="/assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- Nvd3 - D3 Charts -->
    <script type="text/javascript" src="/assets/vendor/d3/d3.min.js"></script>
    <script type="text/javascript" src="/assets/vendor/nvd3/build/nv.d3.min.js"></script>

    <!-- Data tables -->
    <script type="text/javascript" src="/assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript"
            src="/assets/vendor/datatables-responsive/js/dataTables.responsive.js"></script>

    <!-- PNotify -->
    <script type="text/javascript" src="/assets/vendor/pnotify/pnotify.custom.min.js"></script>

    <!-- Fuse Html -->
    <script type="text/javascript" src="/assets/vendor/fuse-html/fuse-html.min.js"></script>

    <!-- Main JS -->
    <script type="text/javascript" src="/assets/js/main.js"></script>

    <script src="https://www.gstatic.com/firebasejs/3.6.4/firebase.js"></script>
    <script type="text/javascript" src="/assets/js/chat.js"></script>
    <script type="text/javascript" src="/assets/js/post.js"></script>

    <!-- / JAVASCRIPT -->
</head>
<body class="@yield('body')">
    <div id="wrapper">
        @yield('content')
    </div>
</body>
</html>
