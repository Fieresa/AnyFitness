<?php
include "../core/user.php";
if(isset($_POST['tri']))
{$user1C=new userC();
	$listeUsers=$user1C->rechercher($_POST['tri']);
?>
                                   <table border="1" >
<tr>
<td>Userid</td>
<td>Nom</td>
<td>Prenom</td>
<td>Email</td>
<td>Password</td>
<td>Delete</td>
</tr>

<?PHP
foreach($listeUsers as $row){
  ?>
  <tr>
  <td><?PHP echo $row['userid']; ?></td>
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['prenom']; ?></td>
  <td><?PHP echo $row['email']; ?></td>
  <td><?PHP echo $row['password']; ?></td>
  <td><form method="POST" action="supprimercommande.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['userid']; ?>" name="numcmd">
  </form>
  </td>
  <?PHP
}}
?>
</table>			