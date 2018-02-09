
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>Intranet EA</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/ressources.css" rel="stylesheet">
  </head>

  <body>

    @include('layout.nav')

    <!-- HEADER !-->
    
    <div class="blog-header">
      <div class="container">

        @yield('header')

      </div>

    </div>

    <div class="container">

      <div class="row">

        @yield('content')

        @include('layout.sidebar')

      </div><!-- /.row -->

    </div><!-- /.container -->

    @include('layout.footer')

  </body>
</html>
