<?php
include "../entities/categoryH.php";
include "../core/category.php";
$idmark = $_GET['role'];
$sql = "select * from category where role=".$idmark."";
$db = config::getConnexion();
try{
		$listeCategories=$db->query($sql);
		return $result;
		}
		catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>userid</td>
<td>role</td>
</tr>

<?PHP
foreach($listeCategories as $row){
	?>
	<tr>
	<td><?PHP echo $row['userid']; ?></td>
	<td><?PHP echo $row['role']; ?></td>
	</tr>
	<?PHP
}
?>