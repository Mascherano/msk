<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Transportes MSK es una empresa de transporte de carga por carretera. Cotiza tus fletes o mudanzas con nosotros.">
        <meta name="keywords" content="Mudanzas, fletes, Transporte de carga, Transportes, Camiones, Carretera, carretera Chile, region de nuble, Transportes MSK">
        <meta name="author" content="Transportes MSK | Marcelo A. González Cartes">
        <meta name="copyright" content="Transportes MSK" />
        <meta name="robots" content="index"/>
        
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