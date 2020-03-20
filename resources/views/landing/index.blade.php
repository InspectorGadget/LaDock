<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LaDock - Welcome</title>

  <!-- Bootstrap Core CSS -->
  <link href="{{ asset('landing/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="{{ asset('landing/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="{{ asset('landing/vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="{{ asset('landing/css/stylish-portfolio.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a class="js-scroll-trigger" href="#page-top">LaDock</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#page-top">Home</a>
        </li>
        @if (Route::has('login') && Route::has('register'))
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="{{ route('login') }}">Login</a>
            </li>

            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="#page-top">Register</a>
            </li>
        @endif
    </ul>
  </nav>

  <!-- Header -->
  <header class="masthead d-flex">
    <div class="container text-center my-auto">
        <h1 class="mb-1">LaDock</h1>
        <h3 class="mb-5">
            <em>Dockerize your MCPE Server like an absolute Boss & with one click!</em>
        </h3>
        @if (Route::has('login') && Route::has('register'))
            <a class="btn btn-success btn-xl" href="{{ route('login') }}">Login</a>
            <a class="btn btn-danger btn-xl" href="{{ route('register') }}">Register</a>
        @endif
    </div>
    <div class="overlay"></div>
  </header>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <ul class="list-inline mb-5">
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white" href="https://github.com/InspectorGadget/LaDock" target="_blank">
            <i class="icon-social-github"></i>
          </a>
        </li>
      </ul>
      <p class="text-muted small mb-0">Copyright &copy; LaDock 2020</p>
    </div>
  </footer>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('landing/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('landing/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{ asset('landing/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('landing/js/stylish-portfolio.min.js') }}"></script>

</body>

</html>
