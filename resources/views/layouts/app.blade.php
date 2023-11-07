<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .widget-iframe {
            left: 0 !important;
        }
    </style>

</head>

<body class="bg-gray-200 max-w-full">

    @include('layouts.navbar')
    <div>nfsndkj</div>

    <div class="mt-20">
        @yield('content')
    </div>

    @include('layouts.footer')

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

    @yield('scripts')

    <tbkr-bm-widget restaurant-id="36700721" source="website" use-modal="1" modal-open="1" lang="nl"
        theme="light" primary-color="#a82727"></tbkr-bm-widget>
    <tbkr-shop-widget shop-id="453" source="website" mode="embed" language="nl" theme="light"
        collections="vouchers"></tbkr-shop-widget>

    <script src="https://reservations.tablebooker.com/tbkr-widget-import.min.js"></script>
    {{--  <script src="https://widget.tablebooker.shop/tbkr-widget-import.min.js"></script>  --}}

    <script>
        window.Futy = {
            key: '6536a2bcbd743'
        };
        (function(e, t) {
            var n = e.createElement(t);
            n.async = true;
            var f = window.Promise && window.fetch ? 'modern.js' : 'legacy.js';
            n.src = 'https://v1.widget.futy.io/js/futy-widget-' + f;
            var r = e.getElementsByTagName(t)[0];
            r.parentNode.insertBefore(n, r);
        })(document, 'script');
    </script>
</body>

</html>
