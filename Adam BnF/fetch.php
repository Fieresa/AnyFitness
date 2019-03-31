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
   
<?php  
include "../core/commandesc.php";
 $connect = mysqli_connect("localhost", "root", "", "adam"); 
 if( isset($_POST["query"]))  
 { $commandesc1=new commandesc();
  $sql="SElECT numcmd,quantite,p.nom as 'produit',prix,date,heure,c.id as 'user',c.nom 'name',prenom From commandes inner join produit p on produit=id inner join client c on client=c.id where numcmd like '%".$_POST["query"]."%' or c.id like '%".$_POST["query"]."%' or p.nom like '%".$_POST["query"]."%' or prix like '%".$_POST["query"]."%' or quantite like '%".$_POST["query"]."%' or date like '%".$_POST["query"]."%' or heure like '%".$_POST["query"]."%' or prenom like '%".$_POST["query"]."%' or c.nom like '%".$_POST["query"]."%' " ;
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
      $listecommandes=$liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

                ?>
                  <table border="1" width="100%" id="tablepanier">
<tr>
<td>numcmd</td>
<td>client</td>
<td>nom</td>
<td>prenom</td>
<td>produit</td>
<td>prix</td>
<td>quantite</td>
<td>date</td>
<td>heure</td>
<td>supprimer</td>
</tr>

<?PHP
foreach($listecommandes as $row){
  ?>
  <tr>
  <td><?PHP echo $row['numcmd']; ?></td>
  <td><?PHP echo $row['user']; ?></td>
  <td><?PHP echo $row['name']; ?></td>
  <td><?PHP echo $row['prenom']; ?></td>
  <td><?PHP echo $row['produit']; ?></td>
  <td><?PHP echo $row['prix']; ?></td>
  <td><?PHP echo $row['quantite']; ?></td>
  <td><?PHP echo $row['date']; ?></td>
  <td><?PHP echo $row['heure']; ?></td>
  <td><form method="POST" action="supprimercommande.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['numcmd']; ?>" name="numcmd">
  </form>
  </td>
  <?PHP
}
?>
</table>
<?php
}
 ?>  