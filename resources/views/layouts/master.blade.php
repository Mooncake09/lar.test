
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/public/favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="/public/css/blog.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      @include('layouts.header')

      {{--@include('layouts.postheader')--}}

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            Пока что тут еще не очень все красиво, все потому что мне лень возиться с версткой
          </h3>

          @yield('content')



        </div><!-- /.blog-main -->

        @include('layouts.sidebar')

      </div><!-- /.row -->

    </main><!-- /.container -->

    @include('layouts.footer')

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
    {{--<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>--}}
    {{--<script src="../../../../assets/js/vendor/popper.min.js"></script>--}}
    {{--<script src="../../../../dist/js/bootstrap.min.js"></script>--}}
    {{--<script src="../../../../assets/js/vendor/holder.min.js"></script>--}}
    {{--<script>--}}
      {{--Holder.addTheme('thumb', {--}}
        {{--bg: '#55595c',--}}
        {{--fg: '#eceeef',--}}
        {{--text: 'Thumbnail'--}}
      {{--});--}}
    {{--</script>--}}
  </body>
</html>
