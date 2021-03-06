<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} @yield('title')</title>

@section('styles')
@endsection

@section('scripts')
@endsection

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body class="sidebar-collapsed">
    @include('layouts.navbar')
    @include('layouts.sidebar')

    <div class="main-content" id="main-content">

        @yield('content')

        @include('modals.alert')

    </div> 

    <!-- Scripts -->
    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script>
        maGlobal.bindListeners();
    </script>
    @yield('scripts')
</body>
</html>
