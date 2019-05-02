<?php
    session_start(); 
                if (!isset($_SESSION['userid']) || !isset($_SESSION['role']) )
                {                if($_SESSION['role'] != "Admin")
                   { header("Location: loginback.php"); 
                }
              }
    ?>
<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
      <link rel="icon" type="image/png" href="images/any fitness3.png">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>ANY FITNESS</title>
    <link rel="apple-touch-icon" sizes="60x60" href="../app-assets/images/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../app-assets/images/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../app-assets/images/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="../app-assets/images/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap.css">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="../app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/pace.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/colors.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/documentation.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

    <!-- - var navbarCustom = "navbar-fixed-top navbar-semi-dark navbar-shadow"-->
    <!-- navbar-fixed-top-->
    <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1">
                  <div class="bs-callout-info callout-border-left mt-1 p-1">
                  <strong>Great Job!</strong>
                  <p>Biscuit macaroon tootsie roll croissant. Dessert candy canes halvah cookie liquorice. Candy canes muffin gummies jujubes brownie. Pie cake pie pastry sugar plum jelly apple pie cotton candy.</p></i></div></a></li>
            <li class="nav-item"><a href="index.html" class="navbar-brand nav-link" ><img alt="branding logo" style="position:fixed; top:15px; left:0px;" src="../app-assets/images/logo/robust-logo-light.png" data-expand="images/any fitness6.png" data-collapse="images/any fitness7.png" class="brand-logo" ></a></li>
            <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x fa-rotate-90"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content">
          <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
            <ul class="nav navbar-nav">
              <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5"></i></a></li>
              <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i class="ficon icon-expand2"></i></a></li>
            </ul>
            <ul class="nav navbar-nav float-xs-right">
            </ul>
            <ul class="nav navbar-nav float-xs-right">
              <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span><span class="user-name">Admin</span></a>
                <div class="dropdown-menu dropdown-menu-right"><a href="editusers.php?userid=<?PHP echo $_SESSION['userid']; ?>" class="dropdown-item"><i class="icon-head"></i> Edit Profile</a></a>
                  <div class="dropdown-divider"></div><a href="disconnectback.php?deconnexion=true" class="dropdown-item"><i class="icon-power3"></i> Logout</a>
                </div>
          
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- main menu-->
    <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
      <!-- main menu header-->
      <!-- / main menu header-->
      <!-- main menu content-->
      <div class="main-menu-content menu-accordion">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
<li class=" nav-item"><a href="index.html"><i class="icon-bag"></i><span data-i18n="" class="menu-title">Commandes</span></a>
            <ul class="menu-content">
              <li><a href="affichagecomplet.php"><i class="icon-paper"></i><span data-i18n="" class="menu-item">Affichage Complet</span></a>
              </li>
              <li><a href="tri.php"><i class="icon-android-menu"></i><span data-i18n="" class="menu-item">Tri</span></a>
              </li>
              <li><a href="recherchercommandes.php"><i class="icon-warning"></i><span data-i18n="" class="menu-item">Recherche avancée</span></a>
              </li>
              <li><a href="rechercheclient.php"><i class="icon-man"></i><span data-i18n="" class="menu-item">Recherche par client</span></a>
              </li>
              <li><a href="commandespayees.php"><i class="icon-euro"></i><span data-i18n="" class="menu-item">Commandes payées</span></a>
              </li>
              <li><a href="commandesnonpayees.php"><i class="icon-bag3"></i><span data-i18n="" class="menu-item">Cmd non payées</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="index.html"><i class="icon-money"></i><span data-i18n="" class="menu-title">Codes</span></a>
            <ul class="menu-content">
                                          <li><a href="ajoutcode.php"><i class="icon-plus"></i><span data-i18n="" class="menu-item">Ajout</span></a>
</li>
              <li><a href="affichcomplet.php"><i class="icon-paper"></i><span data-i18n="" class="menu-item">Affichage Complet</span></a>
              </li>
              <li><a href="tric.php"><i class="icon-android-menu"></i><span data-i18n="" class="menu-item">Tri</span></a>
              </li>
              <li><a href="recherchercode.php"><i class="icon-warning"></i><span data-i18n="" class="menu-item">Recherche avancée</span></a>
              </li>
              <li><a href="recherchemontant.php"><i class="icon-euro"></i><span data-i18n="" class="menu-item">Rech par montant</span></a>
              </li>
              <li><a href="codeutilises.php"><i class="icon-check"></i><span data-i18n="" class="menu-item">Codes utilisés</span></a>
              </li>
              <li><a href="codenonutilises.php"><i class="icon-cross"></i><span data-i18n="" class="menu-item">Codes non utilisés</span></a>
              </li>
            </ul>
          </li>
            <li class=" nav-item"><a href="index.html"><i class="icon-bag"></i><span data-i18n="" class="menu-title">Produits</span></a>
            <ul class="menu-content">
              <li><a href="ajoutproduit.html"><i class="icon-plus"></i><span data-i18n="" class="menu-item">Ajout</span></a>
              </li>
              <li><a href="afficherproduit.php"><i class="icon-android-menu"></i><span data-i18n="" class="menu-item">Affichage et gestion</span></a>
              </li>
            </ul>
          </li>
            <li class=" nav-item"><a href="index.html"><i class="icon-menu"></i><span data-i18n="" class="menu-title">Categorie de produit</span></a>
            <ul class="menu-content">
              <li><a href="ajoutcategorie.html"><i class="icon-plus"></i><span data-i18n="" class="menu-item">Ajout</span></a>
              </li>
              <li><a href="affichercategorie.php"><i class="icon-android-menu"></i><span data-i18n="" class="menu-item">Affichage et gestion</span></a>
              </li>
            </ul>
          </li>
            <li class=" nav-item"><a href="index.html"><i class="icon-man"></i><span data-i18n="" class="menu-title">Users</span></a>
            <ul class="menu-content">
              <li><a href="createuser.php"><i class="icon-plus"></i><span data-i18n="" class="menu-item">Ajout</span></a>
              </li>
              <li><a href="showusers.php"><i class="icon-android-menu"></i><span data-i18n="" class="menu-item">Affichage et gestion</span></a>
              </li>
              <li><a href="searchusers.php"><i class="icon-warning"></i><span data-i18n="" class="menu-item">recherche</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="index.html"><i class="icon-menu"></i><span data-i18n="" class="menu-title">categorie des Users</span></a>
            <ul class="menu-content">
              <li><a href="create.php"><i class="icon-plus"></i><span data-i18n="" class="menu-item">Ajout</span></a>
              </li>
              <li><a href="users.php"><i class="icon-android-menu"></i><span data-i18n="" class="menu-item">Affichage et gestion</span></a>
              </li>
              <li><a href="searchcat.php"><i class="icon-warning"></i><span data-i18n="" class="menu-item">recherche</span></a>
              </li>
              <li><a href="statcats.php"><i class="icon-stats-dots"></i><span data-i18n="" class="menu-item">stat</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="index.html"><i class="icon-money"></i><span data-i18n="" class="menu-title">Reservations</span></a>
            <ul class="menu-content">
              <li><a href="ajoutbackreservation.php"><i class="icon-plus"></i><span data-i18n="" class="menu-item">Ajout</span></a>
              </li>
              <li><a href="afficherbackreservation.php"><i class="icon-android-menu"></i><span data-i18n="" class="menu-item">Affichage et gestion</span></a>
              </li>
              <li><a href="rechercherbackreservation.php"><i class="icon-warning"></i><span data-i18n="" class="menu-item">recherche</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="index.html"><i class="icon-man2"></i><span data-i18n="" class="menu-title">Coach</span></a>
            <ul class="menu-content">
              <li><a href="ajoutbackcoach.php"><i class="icon-plus"></i><span data-i18n="" class="menu-item">Ajout</span></a>
              </li>
              <li><a href="afficherbackcoach.php"><i class="icon-android-menu"></i><span data-i18n="" class="menu-item">Affichage et gestion</span></a>
              </li>
              <li><a href="recherchercoach.php"><i class="icon-warning"></i><span data-i18n="" class="menu-item">recherche</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="index.html"><i class="icon-table"></i><span data-i18n="" class="menu-title">Cour</span></a>
            <ul class="menu-content">
              <li><a href="ajoutbackcour.php"><i class="icon-plus"></i><span data-i18n="" class="menu-item">Ajout</span></a>
              </li>
              <li><a href="afficherbackcour.php"><i class="icon-android-menu"></i><span data-i18n="" class="menu-item">Affichage et gestion</span></a>
              </li>
              <li><a href="recherchercour.php"><i class="icon-warning"></i><span data-i18n="" class="menu-item">recherche</span></a>
              </li>
            </ul>
          </li>
           <li class=" nav-item"><a href="index.html"><i class="icon-paper"></i><span data-i18n="" class="menu-title">Reclamations Avis</span></a>
            <ul class="menu-content">
              <li><a href="afficherbackreclamation.php"><i class="icon-paper"></i><span data-i18n="" class="menu-item">Reclamations</span></a>
              </li>
              <li><a href="statavis.php"><i class="icon-stats-bars2"></i><span data-i18n="" class="menu-item">Avis</span></a>
              </li>
            </ul>
          </li>
                    <li class=" nav-item"><a href="index.html"><i class="icon-stats-dots"></i><span data-i18n="" class="menu-title">Statistiques</span></a>
            <ul class="menu-content">
              <li><a href="produitcommandes.php"><i class="icon-stats-bars"></i><span data-i18n="" class="menu-item">Produits commandés</span></a>
              </li>
              <li><a href="montantcode.php"><i class="icon-stats-bars2"></i><span data-i18n="" class="menu-item">Montants codes</span></a>
              </li>
              <li><a href="categorieproduit.php"><i class="icon-stats-bars2"></i><span data-i18n="" class="menu-item">categories produits</span></a>
              </li>
               <li><a href="coursjour.php"><i class="icon-stats-bars2"></i><span data-i18n="" class="menu-item">Cours jour</span></a>
              </li>
              <li><a href="cucnu.php"><i class="icon-check"></i><span data-i18n="" class="menu-item">Codes utilisés</span></a>
              </li>
              <li><a href="cpcnp.php"><i class="icon-euro"></i><span data-i18n="" class="menu-item">Commandes payées</span></a>
              </li>
              <li><a href="topachteurs.php"><i class="icon-podium"></i><span data-i18n="" class="menu-item">Top Achteurs</span></a>
              </li>
              <li><a href="clientdumois.php"><i class="icon-dollar"></i><span data-i18n="" class="menu-item">Client du mois</span></a>
              </li>
            </ul>
          </li>
          
                   <li class=" nav-item"><a href="#"><i class=""></i><span data-i18n="" class="menu-title"> </span></a>
          </li>

                    <li class=" nav-item"><a href="#"><i class=""></i><span data-i18n="" class="menu-title"> </span></a>
          </li>

                    <li class=" nav-item"><a href="#"><i class=""></i><span data-i18n="" class="menu-title"> </span></a>
          </li>

                   <li class=" nav-item"><a href="#"><i class=""></i><span data-i18n="" class="menu-title"> </span></a>
          </li>

                    <li class=" nav-item"><a href="#"><i class=""></i><span data-i18n="" class="menu-title"> </span></a>
          </li>

          <li class=" nav-item"><a href="#"><i class=""></i><span data-i18n="" class="menu-title"> </span></a>
          </li>
        </ul>
      </div>
      <!-- /main menu content-->
      <!-- main menu footer-->
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
                <li class="breadcrumb-item active"><a href="index.html">Home</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Overview -->
<div class="card">
    <div class="card-header">
        <h4 id="basic-forms" class="card-title">Reservations</h4>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="card-body collapse in" aria-expanded="true">
        <div class="card-block">


      <div>
      <form method="POST" action="ajoutreservation1.php">
<table>
<tr>
<td>Id_reservation</td>
<td><input type="number" name="Id_reservation" min="0" max="99999" class="form-control"></td>
</tr>
<tr>
<td>Id_cour</td>
<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "adam";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "select Id_cour from cour";

// for method 2

$result2 = mysqli_query($connect, $query);

$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[0]</option>";
}

?>

<td>        <select name="Id_cour" class="form-control">
        <?php echo $options;?> 
        </select>
</td>
</tr>
<tr>
<td>Id_client</td>
<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "adam";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "select userid from user";

// for method 2

$result2 = mysqli_query($connect, $query);

$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[0]</option>";
}

?>
<td>        <select name="Id_client" class="form-control">
        <?php echo $options;?> 
        </select>
</td></tr>
<tr>
<td></td>
<td><input type="submit" name="ajouter" value="ajouter"></td>
</tr>
</table>
</form>
                
</div>


        </div>
    </div>
</div>
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border">
      <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank" class="text-bold-800 grey darken-2">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block">Hand-crafted & Made with <i class="icon-heart5 pink"></i></span></p>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="../app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
    <script src="../app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="../app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="../app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../app-assets/js/scripts/documentation.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/ui/affix.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>