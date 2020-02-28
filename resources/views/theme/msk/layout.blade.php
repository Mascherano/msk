<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.6">
        <title>MSK Transportes</title>

        <!-- Bootstrap core CSS -->
        <link href="{{asset("assets/$theme/css/bootstrap.min.css")}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset("assets/$theme/css/all.css")}}">


        <!-- Custom styles for this template -->
        <link href="{{asset("assets/$theme/css/style.css")}}" rel="stylesheet">
    </head>

    <body>

        <!-- inicio header -->
        @include("theme/$theme/header")
        <!-- fin header -->

        <!-- inicio main -->
        <main role="main">
            @include("theme/$theme/main")
            @include("theme/$theme/footer")
        </main>
        <!-- fin main-->

        <script src="{{asset("assets/$theme/js/jquery-3.4.1.min.js")}}"></script>
        <script>
            window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')
        </script>
        <script src="{{asset("assets/$theme/js/bootstrap.bundle.min.js")}}" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    </body>
</html>