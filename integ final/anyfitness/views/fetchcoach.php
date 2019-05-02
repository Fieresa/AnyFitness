   <?php  
include "../core/COREcoach.php";
 $connect = mysqli_connect("localhost", "root", "", "adam"); 
 if( isset($_POST["query"]))  
 { $coachc1=new coachC();
  $sql="SElECT Id_coach,nom,prenom,path from coach where Id_coach like '%".$_POST["query"]."%' or prenom like '%".$_POST["query"]."%' or nom like '%".$_POST["query"]."%'" ;
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
      $listecoach=$liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

                ?>
<table id="bootstrap-data-table-export" class="table table-striped table-bordered"><tr>
  <thead>
<tr>
<td>Id_coach</td>
<td>nom</td>
<td>prenom</td>
<td>path</td>
<td>supprimer</td>
<td>modifier</td>
</tr>
</thead>
<?PHP
foreach($listecoach as $row){
  ?>
  <tr>
  <td><?PHP echo $row['Id_coach']; ?></td>
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['prenom']; ?></td>
  <td><?PHP echo $row['path']; ?></td>
  <td><form method="POST" action="supprimercoach.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['Id_coach']; ?>" name="Id_coach">
  </form>
  </td>
  <td><a href="modifiercoach.php?Id_coach=<?PHP echo $row['Id_coach']; ?>">
	Modifier</a></td>
	</tr>
  <?PHP
}
?>
</table>
<?php
}
 ?>  