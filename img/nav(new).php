<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<!-- Bootstrap CSS-->
<link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-5/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-5/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-5/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-5/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-5/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-5/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-5/css/custom.css">
    <style type="text/css">/* Chart.js */
        @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
    </style>
    <!-- <link rel="shortcut icon" href="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-5/img/favicon.ico"> -->
</head>
<body> 
<!--     <nav class="navbar bg-dark navbar-dark fixed-top p-0 shadow flex-md-nowrap">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/main.php">School-of-Rokyni</a>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
            <a class="text-white"><?php  echo $_SESSION['logged_user']->name;  ?></a>
            <a href="logout.php" class="btn btn-dark">Sign out</a>
            </li>
        </ul>
    </nav> -->
    
    <!-- <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar ">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link " href="main.php">
                            Головна
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-justified" href="balls.php">
                            Табель(demo)
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="teachers.php">
                            Вчителi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link "  href="rozklad.php">
                            Розклад(demo)
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"   href="news.php">
                            Оголошення(demo)
                            </a>
                        </li>
                        <li class="nav-item" >
                            <a class="nav-link"  href="about.php">
                            Про школу
                            </a>
                        </li> -->
                        <!-- <li class="nav-item" >
                            <a class="nav-link" style="color: red;" href="bad_news.php">
                            Зауваження
                            </a>
                        </li> -->
<!--                     </ul>
                </div>
            </nav> -->

        <nav class="side-navbar">
            <div class="side-navbar-wrapper">
                <!-- Sidebar Header    -->
                <div class="sidenav-header d-flex align-items-center justify-content-center">
                <!-- User Info-->
                <div class="sidenav-header-inner text-center">
                    <h2 class="h5"> <?php  echo $_SESSION['logged_user']->name;  ?> </h2>
                </div>
                <!-- Small Brand information, appears on minimized sidebar-->
                <div class="sidenav-header-logo"><a href="main.php" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
            </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="main.php"> <i class="icon-home"></i>Головна</a></li>
            <li><a href="balls.php"> <i class="icon-form"></i>Табель(demo)</a></li>
            <li><a href="teachers.php"> <i class="fa fa-bar-chart"></i>Вчителi</a></li>
            <li><a href="rozklad.php"> <i class="icon-grid"></i>Розклад(demo)</a></li>
            <li><a href="news.php"> <i class="icon-interface-windows"></i>Оголошення(demo)</a></li>
            <li> <a href="about.php"> <i class="icon-mail"></i>Про школу
                <div class="badge badge-warning"></div></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn"  class="menu-btn"><i class="icon-bars"> </i></a><a href="main.php" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span>School-of-</span><strong class="text-primary">ROKYNI</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Log out-->
                <li class="nav-item"><a href="logout.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
    
    <!-- Scripts -->
    <script src="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-5/vendor/jquery/jquery.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-5/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-5/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-5/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-5/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-5/vendor/chart.js/Chart.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-5/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-5/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-5/js/charts-home.js"></script>
    <!-- Main File-->
    <script src="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-5/js/front.js"></script>

</body>
</html>