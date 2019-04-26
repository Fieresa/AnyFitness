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
<?PHP
  }
if (isset($_POST['modifier'])){
  $Categorie=new Categorie($_POST['NoC'],$_POST['NomC'],$_POST['DescriptionC']);
  $CategorieC->modifierCategorie($Categorie,$_POST['NoC_ini']);
  echo $_POST['NoC_ini'];
   header('Location: afficherCategorie.php'); 
}
}
?>