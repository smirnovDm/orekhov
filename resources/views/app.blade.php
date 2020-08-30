<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRM</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
{{--    <link id="favicon" rel="icon" type="image/png" sizes="32x32" href="{{ url('/images/favicon-32x32.png') }}">--}}
{{--    <link rel="shortcut icon" href="{{ url('/images/favicon.ico') }}">--}}
{{--    <link rel="stylesheet" href="{{ mix('css/app.css') }}">--}}
</head>

<body>
<noscript>
    <strong>We're sorry but application doesn't work properly without JavaScript enabled. Please
        enable it to
        continue.</strong>
</noscript>
<div id="app"></div>
</body>

<!-- Scripts -->
{{--<script src="{{ mix('/js/manifest.js') }}"></script>--}}
{{--<script src="{{ mix('/js/vendor.js') }}"></script>--}}
<script src="{{ mix('/js/app.js') }}"></script>
<!-- End scripts -->

</html>
