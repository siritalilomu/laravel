<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Blog Post</title>
        <meta name="author" content="Siri Tali">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Bootstrap -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Style Sheet -->
        <link href="/css/style.css" rel="stylesheet">

    </head>

    <body>

      @include ('layout.nav')

      <div class="container">
        <br>
        <br>
            @yield('content')
      </div>

      @include ('layout.footer')

    </body>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/javaScript.js"></script>
</html>
