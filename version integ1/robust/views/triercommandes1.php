<?php
include "../core/commandesc.php";
 $connect = mysqli_connect("localhost", "root", "", "adam"); 
 if(isset($_POST["query"]))  
 {               $commandesc1=new commandesc();
  $sql="select * from commandes c inner join panier on id=panier where numcmd like '%".$_POST["query"]."%' or c.client like '%".$_POST["query"]."%' or produit like '%".$_POST["query"]."%' or prixu like '%".$_POST["query"]."%' or quantite like '%".$_POST["query"]."%' or c.date like '%".$_POST["query"]."%' or c.heure like '%".$_POST["query"]."%' or panier like '%".$_POST["query"]."%' order by quantite" ;
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
      $listecommandes=$liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

                ?>
<table border="1">
<tr>
<td>numcmd</td>
<td>client</td>
<td>produit</td>
<td>prixu</td>
<td>quantite</td>
<td>date</td>
<td>heure</td>
<td>panier</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listecommandes as $row){
  ?>
  <tr>
  <td><?PHP echo $row['numcmd']; ?></td>
  <td><?PHP echo $row['client']; ?></td>
  <td><?PHP echo $row['produit']; ?></td>
  <td><?PHP echo $row['prixu']; ?></td>
  <td><?PHP echo $row['quantite']; ?></td>
  <td><?PHP echo $row['date']; ?></td>
  <td><?PHP echo $row['heure']; ?></td>
  <td><?PHP echo $row['panier']; ?></td>
  <td><form method="POST" action="supprimercommandes.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['numcmd']; ?>" name="numcmd">
  </form>
  </td>
  <td><a href="modifiercommandes.php?numcmd=<?PHP echo $row['numcmd']; ?>">
  Modifier</a></td>
  </tr>
  <?PHP
}
?>
</table>
<?php
      }  
 ?>  