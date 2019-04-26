<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body style='background:#fff;'>
        <div id="content">
            
            <a href='principale.php?deconnexion=true'><span>Disconnect</span></a>
            
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   { 
					echo '<script language="javascript">';
					echo 'alert("Disconnected")';
					echo '</script>';			   
                      session_unset();
                      header("location:login.php");
                   }
                }
                else if($_SESSION['userid'] !== ""){
                    $user = $_SESSION['userid'];
					echo '<script language="javascript">';
					echo 'alert("You are connected")';
					echo '</script>';
                    // afficher un message
                    echo "<br>Hello $user, you are connected.";
                }
            ?>
            
        </div>
    </body>
</html>