<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('libs/bootstrap/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
</head>
<body>

@include ('layout.nav')
<main role="main" class="container">
    <div class="row">
        @yield('content')

        @include('layout.sidebar')

    </div><!-- /.row -->
</main><!-- /.container -->
@include('layout.footer')

</body>
</html>
