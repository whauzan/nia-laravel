<!DOCTYPE html>
<html>
    <head>
         <!-- Bootstrap CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

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
                <li><a href="dashboard.blade.php">Dashboard</a></li>
                <li><a href="profilsdm.blade.php">Profile</a></li>
                <li><a href="profilsdm.blade.php">Log Out</a></li>
              </ul>
          </nav>

          <!-- </div> -->
        </div>
        
        
      </header>
      <!-- END: header -->
            @yield('content')
    </body>
