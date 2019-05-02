   <?php  
include "../core/COREreservation.php";
 $connect = mysqli_connect("localhost", "root", "", "adam"); 
 if( isset($_POST["query"]))  
 { $reservationc1=new reservationC();
  $sql="SElECT Id_reservation,Id_cour,Id_client from reservation where Id_reservation like '%".$_POST["query"]."%' or Id_client like '%".$_POST["query"]."%' or Id_cour like '%".$_POST["query"]."%'" ;
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
      $listereservation=$liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

                ?>
<table id="bootstrap-data-table-export" class="table table-striped table-bordered"><tr>
  <thead>
<tr>
<td>Id_reservation</td>
<td>Id_cour</td>
<td>Id_client</td>
<td>supprimer</td>
<td>modifier</td>
</tr>
</thead>
<?PHP
foreach($listereservation as $row){
  ?>
  <tr>
  <td><?PHP echo $row['Id_reservation']; ?></td>
  <td><?PHP echo $row['Id_cour']; ?></td>
  <td><?PHP echo $row['Id_client']; ?></td>
  <td><form method="POST" action="supprimerreservation.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['Id_reservation']; ?>" name="Id_reservation">
  </form>
  </td>
  <td><a href="modifierreservation.php?Id_reservation=<?PHP echo $row['Id_reservation']; ?>">
	Modifier</a></td>
	</tr>
  <?PHP
}
?>
</table>
<?php
}
 ?>  