<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        @yield('guard_title')
    </title>
    <link rel="shortcut icon" href="{{ asset('uploads/images/favicon.ico') }}" type="image/x-icon">
    <!-- CSS files -->
    <link href="{{ asset('admin/css/tabler.min.css?1692870487') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/tabler-flags.min.css?1692870487') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/tabler-payments.min.css?1692870487') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/tabler-vendors.min.css?1692870487') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/demo.min.css?1692870487') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('admin/icons/tabler-icons.css') }}">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/lelinh014756/fui-toast-js@master/assets/css/toast@1.0.1/fuiToast.min.css">

    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body class=" d-flex flex-column">
    <script src="{{ asset('admin/js/demo-theme.min.js?1692870487') }}"></script>
    <div id="fui-toast"></div>

    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="{{ route('admin.login') }}" class="navbar-brand navbar-brand-autodark">
                    <img src="https://res.cloudinary.com/doy3slx9i/image/upload/v1735367386/Pengu/logo_vk3mee.svg"
                        class="">
                </a>
            </div>
            <div class="card card-md">
                @yield('guard_content')
            </div>
        </div>
    </div>

    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('admin/js/tabler.min.js?1692870487') }}" defer></script>
    <script src="{{ asset('admin/js/demo.min.js?1692870487') }}" defer></script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/gh/lelinh014756/fui-toast-js@master/assets/js/toast@1.0.1/fuiToast.min.js"></script>


    @if (session('success'))
        <script>
            FuiToast.success('{{ session('success') }}');
        </script>
    @endif

    @if (session('error'))
        <script>
            FuiToast.error('{{ session('error') }}');
        </script>
    @endif

    @stack('scripts')
</body>

</html>
