   <?php  
include "../core/user.php";
 $connect = mysqli_connect("localhost", "root","", "projetweb"); 
 if( isset($_POST["query"]))  
 { $userc1=new userc();
  $sql="SElECT * from user where userid like '%".$_POST["query"]."%' or nom like '%".$_POST["query"]."%' or prenom like '%".$_POST["query"]."%' or email like '%".$_POST["query"]."%'" ;
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
      $listeUsers=$liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

                ?>
<table id="bootstrap-data-table-export" class="table table-striped table-bordered"><tr>
  <thead>
<tr>
<th>Userid</th>
<th>Nom</th>
<th>Prenom</th>
<th>Email</th>
<th>Password</th>
<th>Delete</th>
<th>Edit</th>
</tr>
</thead>
<?PHP
foreach($listeUsers as $row){
  ?>
  <tr>
  <td><?PHP echo $row['userid']; ?></td>
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['prenom']; ?></td>
  <td><?PHP echo $row['email']; ?></td>
  <td><?PHP echo $row['password']; ?></td>
  <td><form method="POST" action="supprimerUser.php">
  <input  type="submit" name="supprimer" value="Delete">
  <input type="hidden" value="<?PHP echo $row['userid']; ?>" name="userid">
  </form>
  </td>
  <td><a class="button" href="editusers.php?userid=<?PHP echo $row['userid']; ?>">Edit</a></td>
  </tr>
  <?PHP
}
?>
</table>
<?php
}
 ?>  