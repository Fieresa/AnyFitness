<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Firas Crud</title>
    <meta name="description" content="Firas Crud - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

          

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                   
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> </i>Products</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="ajoutProduit.html">Add </a></li>
                            <li><a href="afficherProduit.php">Show & Manage </a></li>
                            
                        </ul>
                    </li>
                    <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> </i>Categories</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="ajoutCategorie.html">Add </a></li>
                            <li><a href="afficherCategorie.php">Show & Manage </a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><
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