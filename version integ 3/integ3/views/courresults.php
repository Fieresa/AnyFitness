<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Basic Tables - Robust Free Bootstrap Admin Template</title>
    <link rel="apple-touch-icon" sizes="60x60" href="../../app-assets/images/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../app-assets/images/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../app-assets/images/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../app-assets/images/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../app-assets/images/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="../../app-assets/images/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/bootstrap.css">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/extensions/pace.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/colors.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

    <!-- navbar-fixed-top-->
    <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
            <li class="nav-item"><a href="#" class="navbar-brand nav-link"><img alt="branding logo" src="../../app-assets/images/logo/robust-logo-light.png" data-expand="../../app-assets/images/logo/robust-logo-light.png" data-collapse="../../app-assets/images/logo/robust-logo-small.png" class="brand-logo"></a></li>
            <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content container-fluid">
          <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
            <ul class="nav navbar-nav">
              <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5">         </i></a></li>
            </ul>
            <ul class="nav navbar-nav float-xs-right">
              <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="../../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span><span class="user-name">Admin</span></a>
                <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item"><i class="icon-head"></i> Edit Profile</a><a href="#" class="dropdown-item"><i class="icon-mail6"></i> My Inbox</a><a href="#" class="dropdown-item"><i class="icon-clipboard2"></i> Task</a><a href="#" class="dropdown-item"><i class="icon-calendar5"></i> Calender</a>
                  <div class="dropdown-divider"></div><a href="#" class="dropdown-item"><i class="icon-power3"></i> Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- main menu-->
    <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
      <!-- main menu header-->
      <div class="main-menu-header">
         
      </div>
      <!-- / main menu header-->
      <!-- main menu content-->
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
          <li class=" nav-item"><a href="ajoutbackreservation.php"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">Reservations</span></a>
            <ul class="menu-content">
              <li><a href="ajoutbackreservation.php" data-i18n="nav.dash.main" class="menu-item">Add</a>
              </li>
              <li><a href="afficherbackreservation.php" data-i18n="nav.dash.main" class="menu-item">Display/Edit/Delete</a>
              </li>
			  <li><a href="rechercherReservation.php" data-i18n="nav.dash.main" class="menu-item">Search</a>
              </li>
            </ul>
          </li>
		  <li class="active"><a href="ajoutbackcour.php"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">Cours</span></a>
            <ul class="menu-content">
              <li><a href="ajoutbackcour.php" data-i18n="nav.dash.main" class="menu-item">Add</a>
              </li>
              <li><a href="afficherbackcour.php" data-i18n="nav.dash.main" class="menu-item">Display/Edit/Delete</a>
              </li>
			  <li><a href="rechercherCour.php" data-i18n="nav.dash.main" class="menu-item">Search</a>
              </li>
			  <li><a href="courstat.php" data-i18n="nav.dash.main" class="menu-item">Statistics</a>
              </li>
            </ul>
			</li>
			<li class="nav-item"><a href="ajoutbackcoach.php"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">Coachs</span></a>
            <ul class="menu-content">
              <li><a href="ajoutbackcoach.php" data-i18n="nav.dash.main" class="menu-item">Add</a>
              </li>
              <li><a href="afficherbackcoach.php" data-i18n="nav.dash.main" class="menu-item">Display/Edit/Delete</a>
              </li>
			  <li><a href="rechercherCoach.php" data-i18n="nav.dash.main" class="menu-item">Search</a>
              </li>
            </ul>
			</li>
        </ul>
      </div>
      <!-- /main menu content-->
      <!-- main menu footer-->
      <!-- include includes/menu-footer-->
      <!-- main menu footer-->
    </div>
    <!-- / main menu-->

    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Basic Tables</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Tables</a>
                </li>
                <li class="breadcrumb-item active">Basic Tables
                </li>
              </ol>
            </div>
          </div>
        </div>
         <div class="content-body"><!-- Basic Tables start -->
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Reservations</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                        <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                    </ul>
                </div>
            </div>
			<div>
<?php
include "../core/COREcour.php";
if(isset($_POST['tri']))
{$cour1C=new courC();
	$listecour=$cour1C->rechercherListecour($_POST['tri']);
?>
                                   <table border="1" >
<tr>
<th>Id_cour</th>
<th>Id_coach</th>
<th>Id_backupcoach</th>
<th>Capacity</th>
<th>Duration</th>
<th>Heure</th>
<th>Jour</th>
<th>Delete</th>
</tr>

<?PHP
foreach($listecour as $row){
  ?>
  <tr>
  <td><?PHP echo $row['Id_cour']; ?></td>
  <td><?PHP echo $row['Id_coach']; ?></td>
  <td><?PHP echo $row['Id_backupcoach']; ?></td>
  <td><?PHP echo $row['Capacity']; ?></td>
  <td><?PHP echo $row['Duration']; ?></td>
  <td><?PHP echo $row['Heure']; ?></td>
  <td><?PHP echo $row['Jour']; ?></td>
  <td><form method="POST" action="supprimercour.php">
  <input type="submit" class="button" name="supprimer" value="Delete">
  <input type="hidden" value="<?PHP echo $row['Id_cour']; ?>" name="Id_cour">
  </form>
  </td>
  <?PHP
}}
?>
</table>
                
</div>


<!-- Reflow end -->

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border">
      <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017 <a href="#" target="_blank" class="text-bold-800 grey darken-2">NejahKh</a>, All rights reserved. </span></p>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="../../app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
    <script src="../../app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="../../app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="../../app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>