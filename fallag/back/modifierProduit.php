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
                        <a href="afficherProduit.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> </i>Products</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="ajoutProduit.html">Add </a></li>
                            <li><a href="afficherProduit.php">Show & Manage </a></li>
                            
                        </ul>
                    </li>
                    <li class="menu-item-has-children active dropdown">
                        <a href="afficherCategorie.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> </i>Categories</a>
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
include "/entities/produit.php";
include "/core/produitC.php";
if (isset($_GET['id'])){
	$produitC=new produitC();
    $result=$produitC->recupererproduit($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$nom=$row['nom'];
		$prix=$row['prix'];
		$categorie=$row['categorie'];
		$Qt=$row['Qt'];
?>


    

<form method="POST">
<div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><strong>Edit Product</strong></div>
                            <div class="card-body card-block">
							
                                <div class="form-group"><label for="id" class=" form-control-label">id</label><input type="number" name="id" value=<?PHP echo $id ?> class="form-control"></div>
                                    <div class="form-group"><label for="nom" class=" form-control-label">nom</label><input type="text" name="nom" value=<?PHP echo $nom ?> class="form-control"></div>
                                        <div class="form-group"><label for="prix" class=" form-control-label">prix</label><input type="number" name="prix" placeholder="Enter your new price" class="form-control"></div>
                                            <div class="form-group"><label for="categorie" class=" form-control-label">categorie</label><input type="number" name="categorie" value=<?PHP echo $categorie ?> class="form-control"></div>
												<div class="form-group"><label for="Qt" class=" form-control-label">quantitee</label><input type="number" name="Qt" placeholder="Entre the new Qt for the product" class="form-control"></div>

                                            </div>
<td><input type="submit" name="modifier" value="modifier"></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>


</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$produit=new produit($_POST['id'],$_POST['nom'],$_POST['prix'],$_POST['categorie'],$_POST['Qt']);
	$produitC->modifierproduit($produit,$_POST['id_ini']);
	echo $_POST['id_ini'];
	header('Location: afficherproduit.php');
}
?>
</body>
</HTMl>