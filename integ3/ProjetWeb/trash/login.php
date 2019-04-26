<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="verification.php" method="POST">
                <h1>LOGIN</h1>
                
                <label><b>UserId</b></label>
                <input type="number" placeholder="Enter your UserID" name="userid" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter your Password" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Wrong UserId or Password</p>";
                }
                ?>
            </form>
        </div>
    </body>
</html>