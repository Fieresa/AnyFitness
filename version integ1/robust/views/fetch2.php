<?php
     
        session_start(); 
        if (!isset($_SESSION['userid'])) 
        {
          header("Location: ../ProjetWeb/Frontend/views/login.php");
        }
            ?>
   <?php  
include "../core/commandesc.php";
 $connect = mysqli_connect("localhost", "root", "", "adam"); 
 if( isset($_POST["query"]))  
 { $commandesc1=new commandesc();
  $sql="SElECT numcmd,quantite,folder,p.nom as 'produit',prix,date,heure,userid as 'user',c.nom as 'name',prenom From commandes inner join produit p on produit=id inner join user c on client=userid where (numcmd like '%".$_POST["query"]."%' or userid like '%".$_POST["query"]."%' or p.nom like '%".$_POST["query"]."%' or prix like '%".$_POST["query"]."%' or quantite like '%".$_POST["query"]."%' or date like '%".$_POST["query"]."%' or heure like '%".$_POST["query"]."%' or prenom like '%".$_POST["query"]."%' or c.nom like '%".$_POST["query"]."%') and userid=".$_SESSION['userid']." " ;
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
      $listecommandes=$liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

                ?>
                  <table border="1" width="75%" id="tablepanier" align="center">
<tr>
<td>numcmd</td>
<td>produit</td>
<td>prix</td>
<td>quantite</td>
<td>image</td>
<td>date</td>
<td>heure</td>
<td>supprimer</td>
</tr>

<?PHP
foreach($listecommandes as $row){
  ?>
  <tr>
  <td><?PHP echo $row['numcmd']; ?></td>
  <td><?PHP echo $row['produit']; ?></td>
  <td><?PHP echo $row['prix']; ?> DT</td>
  <td><?PHP echo $row['quantite']; ?></td>
  <td><div class="m-r-10"><img src="../front_falleg/<?PHP echo $row['folder']; ?>" alt="user" class="rounded" width="45" style="width: 50px;"></div></td>
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