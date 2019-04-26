<html class="no-js" lang="en">
<?PHP
include "/entities/Categorie.php";
include "/core/CategorieC.php";
if (isset($_GET['NoC'])){
	$CategorieC=new CategorieC();
    $result=$CategorieC->recupererCategorie($_GET['NoC']);
	foreach($result as $row){
		$NoC=$row['NoC'];
		$NomC=$row['NomC'];
		$DescriptionC=$row['DescriptionC'];
		
?>
<form method="POST">
<div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><strong>Edit Categorie</strong></div>
                            <div class="card-body card-block">
							
                                <div class="form-group"><label for="NoC" class=" form-control-label">NoC</label><input type="number" name="NoC" value=<?PHP echo $NoC ?> class="form-control"></div>
                                    <div class="form-group"><label for="NomC" class=" form-control-label">NomC</label><input type="text" name="NomC" placeholder=<?PHP echo $NomC ?> class="form-control"></div>
                                        <div class="form-group"><label for="DescriptionC" class=" form-control-label">DescriptionC</label><input type="text" name="DescriptionC" placeholder=<?PHP echo $DescriptionC ?> class="form-control"></div>
                                            
                                            </div>
<td><input type="submit" name="modifier" value="modifier"></td>
<td><input type="hidden" name="NoC_ini" value="<?PHP echo $_GET['NoC'];?>"></td>


</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$Categorie=new Categorie($_POST['NoC'],$_POST['NomC'],$_POST['DescriptionC']);
	$CategorieC->modifierCategorie($Categorie,$_POST['NoC_ini']);
	echo $_POST['NoC_ini'];
	header('Location: afficherCategorie.php');
}
?>
</body>
</HTMl>