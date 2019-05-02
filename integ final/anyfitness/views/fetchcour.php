   <?php  
include "../core/COREcour.php";
 $connect = mysqli_connect("localhost", "root", "", "adam"); 
 if( isset($_POST["query"]))  
 { $courc1=new courC();
  $sql="SElECT Id_cour,Id_coach,Id_backupcoach,Capacity,Duration,Heure,Jour from cour where Id_cour like '%".$_POST["query"]."%' or Id_backupcoach like '%".$_POST["query"]."%' or Id_coach like '%".$_POST["query"]."%' or Capacity like '%".$_POST["query"]."%' or Duration like '%".$_POST["query"]."%' or Heure like '%".$_POST["query"]."%' or Jour like '%".$_POST["query"]."%'" ;
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
      $listecour=$liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

                ?>
<table id="bootstrap-data-table-export" class="table table-striped table-bordered"><tr>
  <thead>
<tr>
<td>Id_cour</td>
<td>Id_coach</td>
<td>Id_backupcoach</td>
<td>Nom</td>
<td>Duration</td>
<td>Heure</td>
<td>Jour</td>
<td>supprimer</td>
<td>modifier</td>
</tr>
</thead>
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
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['Id_cour']; ?>" name="Id_cour">
  </form>
  </td>
  <td><a href="modifiercour.php?Id_cour=<?PHP echo $row['Id_cour']; ?>">
	Modifier</a></td>
	</tr>
  <?PHP
}
?>
</table>
<?php
}
 ?>  