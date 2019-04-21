<?php
session_set_cookie_params('3600');
session_start();
if(isset($_POST['userid']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_userid = 'root';
    $db_password = '';
    $db_name     = 'adam';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_userid, $db_password,$db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $userid = mysqli_real_escape_string($db,htmlspecialchars($_POST['userid'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
    
    if($userid !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM user where 
              userid= '".$userid."' and password='".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['userid'] = $userid;
           header('Location: home.php');
        }
        else
        {
           header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{	
   header('Location: login.php');
}
mysqli_close($db); // fermer la connexion
?>