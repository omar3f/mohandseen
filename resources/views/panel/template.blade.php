<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{!! asset('bootstrap/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('font-awesome/css/font-awesome.min.css') !!}">

    @yield('stylesheets')
</head>
<body>



<div class="container-fluid">
    @yield('content')
</div>


<script src="{!! asset('jquery/jquery-2.1.4.min') !!}"></script>
<script src="{!! asset('bootstrap/js/bootstrap.min.js') !!}"></script>
@yield('scripts')
</body>
</html>
