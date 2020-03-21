<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keyword" content="">
  <link rel="shortcut icon" href="{{ asset('dash/img/favicon.png') }}">

  <title>@yield('title')</title>

  <!-- Bootstrap CSS -->
  <link href="{{ asset('dash/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{ asset('dash/css/bootstrap-theme.css') }}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{ asset('dash/css/elegant-icons-style.css') }}" rel="stylesheet" />
  <link href="{{ asset('dash/css/font-awesome.min.css') }}" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{ asset('dash/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') }}" rel="stylesheet" />
  <link href="{{ asset('dash/assets/fullcalendar/fullcalendar/fullcalendar.css') }}" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{ asset('dash/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{ asset('dash/css/owl.carousel.css') }}" type="text/css">
  <link href="{{ asset('dash/css/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{ asset('dash/css/fullcalendar.css') }}">
  <link href="{{ asset('dash/css/fullcalendar.css') }}" rel="stylesheet">
  <link href="{{ asset('dash/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('dash/css/style-responsive.css') }}" rel="stylesheet" />
  <link href="{{ asset('dash/css/xcharts.min.css') }}" rel=" stylesheet">
  <link href="{{ asset('dash/css/jquery-ui-1.10.4.min.css') }}" rel="stylesheet">
</head>

<body>
  <section id="container" class="">
    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <a href="{{ route('dashboard') }}" class="logo">La <span class="lite">Dock</span></a>

      <div class="top-nav notification-row">
        <ul class="nav pull-right top-menu">
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <span class="username">{{ auth()->user()->email }}</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </header>

    <aside>
      <div id="sidebar" class="nav-collapse ">
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="{{ route('dashboard') }}">
                <i class="icon_house_alt"></i>
                <span>Dashboard</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>

    <section id="main-content">
      @yield('content')

      <div class="text-center">
        <div class="credits">
          A Panel by <a href="https://github.com/InspectorGadget" target="_blank">InspectorGadget</a>. All rights reserved LaDock &copy;
        </div>
      </div>
    </section>
  </section>

  <!-- javascripts -->
  <script src="{{ asset('dash/js/jquery.js') }}"></script>
  <script src="{{ asset('dash/js/jquery-ui-1.10.4.min.js') }}"></script>
  <script src="{{ asset('dash/js/jquery-1.8.3.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('dash/js/jquery-ui-1.9.2.custom.min.js') }}"></script>
  <!-- bootstrap -->
  <script src="{{ asset('dash/js/bootstrap.min.js') }}"></script>
  <!-- nice scroll -->
  <script src="{{ asset('dash/js/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('dash/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="{{ asset('dash/assets/jquery-knob/js/jquery.knob.js') }}"></script>
  <script src="{{ asset('dash/js/jquery.sparkline.js') }}" type="text/javascript"></script>
  <script src="{{ asset('dash/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
  <script src="{{ asset('dash/js/owl.carousel.js') }}"></script>
  <!-- jQuery full calendar -->
  <<script src="{{ asset('dash/js/fullcalendar.min.js') }}"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="{{ asset('dash/assets/fullcalendar/fullcalendar/fullcalendar.js') }}"></script>
    <!--script for this page only-->
    <script src="{{ asset('dash/js/calendar-custom.js') }}"></script>
    <script src="{{ asset('dash/js/jquery.rateit.min.js') }}"></script>
    <!-- custom select -->
    <script src="{{ asset('dash/js/jquery.customSelect.min.js') }}"></script>
    <script src="{{ asset('dash/assets/chart-master/Chart.js') }}"></script>

    <!--custome script for all page-->
    <script src="{{ asset('dash/js/scripts.js') }}"></script>
    <!-- custom script for this page-->
    <script src="{{ asset('dash/js/sparkline-chart.js') }}"></script>
    <script src="{{ asset('dash/js/easy-pie-chart.js') }}"></script>
    <script src="{{ asset('dash/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('dash/js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('dash/js/xcharts.min.js') }}"></script>
    <script src="{{ asset('dash/js/jquery.autosize.min.js') }}"></script>
    <script src="{{ asset('dash/js/jquery.placeholder.min.js') }}"></script>
    <script src="{{ asset('dash/js/gdp-data.js') }}"></script>
    <script src="{{ asset('dash/js/morris.min.js') }}"></script>
    <script src="{{ asset('dash/js/sparklines.js') }}"></script>
    <script src="{{ asset('dash/js/charts.js') }}"></script>
    <script src="{{ asset('dash/js/jquery.slimscroll.min.js') }}"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });
    </script>

</body>

</html>
