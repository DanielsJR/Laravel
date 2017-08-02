<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') </title>


        <!-- Material Design fonts -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">
           <!-- Fonts -->
   <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->
               <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <!--<link href="css/bootstrap-theme.min.css" rel="stylesheet">-->


    <!-- Bootstrap Material Design -->
    <link rel ="stylesheet" type="text/css" href="/css/bootstrap-material-design.css">
    <link rel ="stylesheet" type="text/css" href="/css/ripples.min.css">
    <!-- navbarStyle -->
    <link rel ="stylesheet" type="text/css" href="/css/navBar.css">

   </head>


    <body>
    @include('shared.navbar')
   
       <div class="flex-center position-ref full-height">
            <div class="content">
              @yield('content')         
                <div class="links">
                  <a href="/">Home</a>
                  <a href="/about">About</a>
                  <a href="/contact">Contact</a>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/docs.min.js"></script>
    
<!-- material design -->
    <script src="/js/ripples.min.js"></script>
    <script src="/js/material.min.js"></script>
    <script>
        $(document).ready(function() {
        // Este comando es usado para inicializar algunos elementos y hacerlos funcionar de modo apropiado
          $.material.init();
       });
    </script>

    </body>
</html>
