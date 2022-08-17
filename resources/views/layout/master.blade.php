<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>VERSITY. &mdash; Verification System Peruri</title>
      <meta name="description" content="Free Bootstrap Theme by uicookies.com">
      <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
      
      <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
      <link rel="stylesheet" href="{{ asset('css/styles-merged.css') }}">
      <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    </head>

    <body class="probootstrap-header">
     <!-- START: header -->
      <header role="banner">
        <div class="container-fluid">
        <div class="position-relative">
          <!-- <div class="row"> -->
            <a href="index.html" class="probootstrap-logo">Versity<span>.</span></a>
            
            <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
            <div class="mobile-menu-overlay"></div>

            <nav role="navigation" class="probootstrap-nav hidden-xs">
              <ul class="probootstrap-main-nav">
                <li><a href="{{ route("dashboard") }}">Dashboard</a></li>
                <li><a href="{{ route("profil_sdm") }}">Profile</a></li>
                <li><a href="{{ route("logout") }}">Log Out</a></li>
              </ul>
          </nav>
          
          <!-- </div> -->
        </div>
        
        
      </header>
      <!-- END: header -->
            @yield('content')
      <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>
    </body>
