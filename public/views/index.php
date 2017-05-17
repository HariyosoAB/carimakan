<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

    <link rel="stylesheet" href="css/font-awesome.css">

    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- datatables -->
    <link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css">
    <!-- sweet alert -->
    <link href="plugins/sweetalert/sweet-alert.css" rel="stylesheet" type="text/css" />
    <!--select2-->
    <link href="plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="css/animasi.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="css/carimakan.css">
    <link href="plugins/angular-carousel/dist/angular-carousel.css" rel="stylesheet" type="text/css" />
    <link href="plugins/angular-bootstrap/ui-bootstrap-custom-2.5.0-csp.css" rel="stylesheet" type="text/css" />
    <link href="plugins/ngSweetAlert/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="plugins/sweetalert/sweetalert2.min.css" rel="stylesheet" type="text/css" />


    <title>Carimakan.</title>
  </head>
  <body ng-app="carimakanApp" ng-controller="sidebarController">
    <div class="sidebar-cr proximaLight" ng-hide="closed.sidebar" style="background-color:white;color:grey;text-decoration:none;">

      <div ng-show="Auth.data">
        <ul class="sidebar-menu proximaBold">
          <div style="background-color:#434343;width:20vw;">
            <li class="header" style="color:white">USER PANEL</li>
          </div>
        </ul>

        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{'image/avatar/'+Auth.picture}}" onError="this.onerror=null;this.src='image/avatar/default.jpg'" class="img-circle" >
          </div>
          <div class="pull-left info">
            <p>{{Auth.data}}</p>
            <a href="#"><i class="fa fa-circle text-success" style="color:grey"></i> Online</a>
          </div>
        </div>
      </div>

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <div style="background-color:#434343;width:20vw;">
            <li class="header proximaBold" style="color:white">MAIN NAVIGATION</li>
          </div>

          <li class="treeview">
            <a href="#!/" style="color:grey">
              <i class="fa fa-dashboard"></i> <span ng-show="Auth.data">Homepage</span> <span ng-show="!Auth.data">Login</span>
            </a>
          </li>
          <li>
            <a href="#!/categories" style="color:grey">
              <i class="fa fa-files-o"></i>
              <span>Categories</span>
            </a>
        </li>
        <li ng-show="Auth.data">
          <a role="button"ng-click="logout()" style="color:grey">
            <i class="fa fa-sign-out"></i>
            <span>Logout</span>
          </a>
      </li>
        <li ng-hide="Auth.data">
          <a style="color:grey" role="button" ng-click="signUp()">
            <i class="fa fa-gear"></i>
            <span>Sign Up</span>
          </a>
        </li>
        <span class="fa fa-2x fa-arrow-circle-left pull-right" style="margin-right:10px; color:grey" role="button" ng-click="toggleSidebar()"></span>

      </ul>
    </div>
    <header id="header" class="main-header" style="background-color: #86d528;z-index:10000;">
        <a href="#!/categories" class="logo">
          <span class="logo-mini">C</span>
          <span class="logo-lg proximaBold" style="color: white; font-size: 135%;">Carimakan.</span>
        </a>
        <nav class="navbar navbar-static-top">
          <div style="text-decoration:none;color:white;" >
            <a class="sidebar-toggle" role="button" style="text-decoration:none;color:white;" id="ham" ng-click="toggleSidebar();">
              <span class="sr-only"style="color:white;">Toggle navigation</span>
            </a>
          </div>

        <form action="#!/lists" method="GET">
                      <input type="text" class="searchbr pull-right proximaLight" placeholder="Search">
        </form>
        </nav>

    </header>
    <section style="padding:0px;" >
              <div class="{{pageClass}}" ng-view></div>
    </section>
    <footer>
        <div class="col-sm-12" style="background:#434343;">
          <div class="row"  style="padding: 0vw 2vw;">
            <div class="col-6 col-sm-6 col-xs-12 container">
                <h3 class="proximaBold" style="color: #86d528">About Us</h3>
                <p class="proximaLight words" style="color:white;">
                  Aplikasi berbasis website untuk mencari tempat makan di sekitarmu !

                  Temukan makanan terbaik sesuai mood mu

                  Cuaca sedang hujan? intip makanan yang cocok disaat hujan

                  Lagi travelling dan bingung mau nyari makan dimana? temukan tempa makan disekitarmu

                  Lagi tanggal tua? temukan tempat makan sesuai isi dompetmu

                  Pengen ke tempat makan yg lagi hit? temukan tempat makan yg instagramable sesuai gayamu                </p>

            </div>
            <div class="col-6 col-sm-6 col-xs-12 container">
                <ul class="proximaLight listo" style="color:white; padding-left:0px;">
                  <h3 class="proximaBold" style="color:#86d528">Pages</h3>
                  <li style="font-size:20px;">
                    About
                  </li >
                  <li style="font-size:20px;">
                    Add Restaurant
                  </li>
                  <li style="font-size:20px;">
                    Advertise
                  </li>
                  <li style="font-size:20px;">
                    Contacts
                  </li>
                </ul>
            </div>
          </div>

        </div>
    </footer>
  </body>
  <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.3/angular.min.js"></script> <!-- load angular -->
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.3/angular-route.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.6.3/angular-animate.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.3/angular-touch.js"></script>
  <script src="plugins/angular-carousel/dist/angular-carousel.js"></script>
  <script src="plugins/angular-bootstrap/ui-bootstrap-custom-tpls-2.5.0.js"></script>
  <script src="plugins/sweetalert/sweetalert2.min.js"></script>
  <script src="plugins/ngSweetAlert/ngSweetAlert2.js"></script>
  <script type="text/javascript">
      var ngSweetAlert2 = window.ngSweetAlert2;
  </script>

  <script src="js/script.js"></script>
  <script type="text/javascript">
      console.log(<?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?> );
      carimakan.constant("CSRF_TOKEN", <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?> );
  </script>
  <script src="js/controller/mainCtrl.js"></script>
  <script src="js/service/userService.js"></script>
  <script src="js/service/queryService.js"></script>

</html>
