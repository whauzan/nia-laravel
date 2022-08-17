<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Versity &mdash; Verification System Peruri</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet"> 
    
    <link rel="stylesheet" href="{{ asset('css/styles-merged.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
{{-- 7878787878 --}}
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
  <!-- START: header -->
  <header role="banner" class="probootstrap-header probootstrap-header-no-intro">
    <div class="container-fluid">

    <a href="index.html" class="probootstrap-logo">VERSITY<span>.</span></a>

  <!-- END: header -->

  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center section-heading">
          <h2>Login</h2>
        </div>\
      </div>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <form action="{{route('login')}}" method="POST" class="probootstrap-form probootstrap-form-box">
          {{-- <form action="{{url('login')}}" method="POST"> --}}
            @csrf
            <div class="form-group">
              <label for="name">Username</label>
              <input type="name" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group mb50">
              <input type="submit" value="Log in" class="btn btn-primary btn-block">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <script src="{{ asset('js/scripts.min.js') }}"></script>
  <script src="{{ asset('js/main.min.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>

  </body>
</html>