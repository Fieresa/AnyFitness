<?php
include "../core/commandesc.php";
 $connect = mysqli_connect("localhost", "root", "", "adam"); 
 if(isset($_POST["query"]))  
 {               $commandesc1=new commandesc();
  $sql="SElECT numcmd,quantite,p.nom as 'produit',prix,date,heure,c.id as 'user',c.nom 'name',prenom From commandes inner join produit p on produit=id inner join client c on client=c.id order by $_POST['query']" ;
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
      $listecommandes=$liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

                ?>
<<tr>
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