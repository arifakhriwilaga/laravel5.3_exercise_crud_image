<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
              <!--Import jQuery before materialize.js-->
        <title>Laravel</title>
        <!--Link Material Design Icon -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <link type="text/css" rel="stylesheet" href="/assets/css/bootstrap.css">
        <!-- Bootstrap Material Design -->
      <link type="text/css" rel="stylesheet" href="/assets/libraries/bootstrap_material/css/bootstrap-material-design.css">
      <link type="text/css" rel="stylesheet" href="/assets/libraries/bootstrap_material/css/ripples.css">
       <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>
    <script type="text/javascript" src="/assets/libraries/jquery/jquery-3.1.0.js"></script>
    <script type="text/javascript" src="/assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="/assets/libraries/bootstrap_material/js/material.js"></script>
    <script type="text/javascript" src="/assets/libraries/bootstrap_material/js/ripples.js"></script>
    <script>
      $( document ).ready(function(){
         $.material.init();
     });
    </script>
    <!-- Navbar -->
    <div class="navbar navbar-info">
    <div class="container-fluid">
     @include('shared.header')
     </div>
     </div>

     <!-- Content -->
     <div class="row">
      @yield('content')
    </div>
    </body>
</html>
