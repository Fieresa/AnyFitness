<?php
     
				session_start(); 
				if (!isset($_SESSION['userid'])) 
				{
					header("Location: login.php");
				}
            ?>
<?PHP

include "../entities/code.php";
include "../core/codec.php";
$codec1=new codec();
$prixcommandes=$codec1->prixtotal($_SESSION['userid']);
$listecodes=$codec1->affichercommandesp($_SESSION['userid']);
$solde=$codec1->solde($_SESSION['userid']);
$email=$codec1->recuperermail($_SESSION['userid']);
$soldenouv=$codec1->soldenouv($_SESSION['userid']);
$client=$codec1->afficherclient($_SESSION['userid']);
foreach($prixcommandes as $row){
	$prixtotal=$row['pt'];}
foreach ($solde as $row)
	{$solde=$row['solde'];} 
foreach ($email as $row)
	{$to=$row['email'];} 
	# code...
foreach ($client as $row)
	{$nom=$row['nom'];
$prenom=$row['prenom'];
$id=$row['userid'];} 
foreach ($listecodes as $row)
{$email=$row['email'];}
$sujet='merci pour vos achats
';
$texte='ANYFITNESS
';
$texte.='merci pour vos achats:
id client:
';
$texte.=$id;
$texte.='
';
$texte.='nom du client:
';
$texte.=$nom;
$texte.='
';
$texte.='prenom du client:
';
$texte.=$prenom;
$texte.='
';
foreach ($listecodes as $row)
	{$numcmd=$row['numcmd'];
	$produit=$row['nom'];
	$prix=$row['prix'];
	$quantite=$row['quantite'];
$texte.='commande numero:
';
$texte.=$numcmd;
$texte.='
';
$texte.='produit:
';
$texte.=$produit;
$texte.='
';
$texte.='prix:
';
$texte.=$prix;
$texte.='
';
$texte.='quantite:
';
$texte.=$quantite;
$texte.='
';
}
$texte.='ancien solde:
';
$texte.=$solde;
$texte.='
';
$texte.='prixtotal:
';
$texte.=$prixtotal;
$texte.='
';
$texte.='nouveau solde:
';
$texte.=$solde-$prixtotal;


$header='From : ANYFITNESS';
mail($to,$sujet,$texte,$header);
	header('Location: ../pdf/createpdf.php');

?>