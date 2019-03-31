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
            <li class="nav-item"><a href="index.html" class="navbar-brand nav-link"><img alt="branding logo" src="../../app-assets/images/logo/robust-logo-light.png" data-expand="../../app-assets/images/logo/robust-logo-light.png" data-collapse="../../app-assets/images/logo/robust-logo-small.png" class="brand-logo"></a></li>
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
            </ul>
          </li>
		  <li class="active"><a href="ajoutbackcour.php"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">Cours</span></a>
            <ul class="menu-content">
              <li><a href="ajoutbackcour.php" data-i18n="nav.dash.main" class="menu-item">Add</a>
              </li>
              <li><a href="afficherbackcour.php" data-i18n="nav.dash.main" class="menu-item">Display/Delete</a>
              </li>
			  <li><a href="#" data-i18n="nav.dash.main" class="menu-item">Edit</a>
              </li>
            </ul>
			</li>
			<li class="nav-item"><a href="ajoutbackcoach.php"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">Coachs</span></a>
            <ul class="menu-content">
              <li><a href="ajoutbackcoach.php" data-i18n="nav.dash.main" class="menu-item">Add</a>
              </li>
              <li><a href="afficherbackcoach.php" data-i18n="nav.dash.main" class="menu-item">Display/Edit/Delete</a>
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
                <li class="breadcrumb-item"><a href="index.php">Home</a>
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
<?PHP
include "../entities/cour.php";
include "../core/COREcour.php";
if (isset($_GET['Id_cour'])){
	$courC=new courC();
    $result=$courC->recuperercour($_GET['Id_cour']);
	foreach($result as $row){
		$Id_cour=$row['Id_cour'];
		$Id_coach=$row['Id_coach'];
		$Id_backupcoach=$row['Id_backupcoach'];
		$Capacity=$row['Capacity'];
		$Duration=$row['Duration'];
		$Heure=$row['Heure'];
		$Jour=$row['Jour'];
?>
<form method="POST">
<table>
<tr>
<td>Id_cour</td>
<td><input type="text" name="Id_cour" value="<?PHP echo $Id_cour ?>"></td>
</tr>
<tr>
<td>Id_coach</td>
<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "projetweb";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "select Id_coach from coach";

// for method 2

$result2 = mysqli_query($connect, $query);

$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[0]</option>";
}

?>

<td>        <select name="Id_coach">
        <?php echo $options;?> 
        </select>
</td>
</tr>
<tr>
<td>Id_backupcoach</td>
<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "projetweb";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "select Id_coach from coach";

// for method 2

$result2 = mysqli_query($connect, $query);

$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[0]</option>";
}

?>

<td>        <select name="Id_backupcoach">
        <?php echo $options;?> 
        </select>
</td>
</tr>
<tr>
<td>Capacity</td>
<td><input type="number" name="Capacity" value="<?PHP echo $Capacity ?>" min="1" max="20"></td>
</tr>
<tr>
<td>Duration</td>
<td><input type="number" name="Duration" value="<?PHP echo $Duration ?>" min="15" max="120"></td>
</tr>
<td>Heure</td>
<td><input type="number" name="Heure" value="<?PHP echo $Heure ?>" min="8" max="22"></td>
</tr>
<tr>
<td>Jour</td>
<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "projetweb";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "select days from restriction";

// for method 2

$result2 = mysqli_query($connect, $query);

$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[0]</option>";
}

?>

<td>        <select name="Jour">
        <?php echo $options;?> 
        </select>
</td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td><input type="hidden" name="Id_cour_ini" value="<?PHP echo $_GET['Id_cour'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$cour=new cour($_POST['Id_cour'],$_POST['Id_coach'],$_POST['Id_backupcoach'],$_POST['Capacity'],$_POST['Duration'],$_POST['Heure'],$_POST['Jour']);
	$courC->modifiercour($cour,$_POST['Id_cour_ini']);
	echo $_POST['Id_cour_ini'];
}
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
