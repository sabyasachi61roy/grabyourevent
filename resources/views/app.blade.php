<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if(env('APP_ENV') == 'production' )
    {!! SEO::generate(true) !!}
    @endif

    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//maps.googleapis.com">
    <link rel="dns-prefetch" href="//checkout.razorpay.com">

    <!-- <link href="https://fonts.googleapis.com/css?family=Archivo:400,500,600,700&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Aleo:400,400i,700&display=swap" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaDnZlozbQxmvDtPh072TphyYqkUYk4V8&libraries=places" async defer></script>
    <!-- built files will be auto injected -->
    @if(\Request::is('checkout'))
    <script async defer src="https://checkout.razorpay.com/v1/checkout.js"></script>
    @endif

    @if(env('APP_ENV') == 'production' )
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151880965-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-151880965-2');
    </script>
    @endif
    @routes
</head>

<body class="bg-gray-100 antialiased font-sans text-gray-600">

    @inertia

</body>

</html>