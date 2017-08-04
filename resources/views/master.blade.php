<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') </title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design fonts -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Bootstrap Material Design -->
    <link rel ="stylesheet" type="text/css" href="/css/bootstrap-material-design.css">
    <link href="https://rawgit.com/FezVrasta/bootstrap-material-design/master/dist/css/material-wfont.min.css" rel="stylesheet">
    <link href="https://rawgit.com/FezVrasta/bootstrap-material-design/master/dist/css/ripples.min.css" rel="stylesheet">
    <link href="/css/jquery.dropdown.css" rel="stylesheet">

    <!-- navbarStyle -->
    <link rel ="stylesheet" type="text/css" href="/css/navBar.css">

   </head>


    <body>
    @include('shared.navbar')
   
       <div class="flex-center position-ref full-height">
            <div>
              @yield('content')         
            </div>
        </div>

        <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

   <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    
   <!-- bootstrap CDN Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <!-- bootstrap material design -->
    
    <script src="https://rawgit.com/FezVrasta/bootstrap-material-design/master/dist/js/material.min.js"></script>
    <script src="https://rawgit.com/FezVrasta/bootstrap-material-design/master/dist/js/ripples.min.js"></script>
    <script src="/js/jquery.dropdown.js"></script>
    <script>
      $.material.init();

      $(document).ready(function() {
        $("#s1").dropdown({"optionClass": "withripple"});
      });
    </script>
   



    </body>
</html>
