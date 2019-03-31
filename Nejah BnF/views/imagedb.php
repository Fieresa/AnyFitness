<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "projetweb");

  // Initialize message variable
  $msg = "";

  $result = mysqli_query($db, "SELECT * FROM images");
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
</head>
<body>
<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['image']."' >";
      	//echo "<p>".$row['image_text']."</p>";
      echo "</div>";
    }
  ?>
</div>
</body>
</html>
 
 <!--<div class="col-md-3 col-sm-3 animate-box">
						<div class="trainers-entry">
							<div class="trainer-img" style="background-image: url(images/trainer-1.jpg)"></div>
							<div class="desc">
								<h3>Diego Carter</h3>
								<span>Body Building Trainer</span>
							</div>
						</div>
					</div>
					
					
					
					
					<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
					echo "<div class='col-md-3 col-sm-3 animate-box'>";
						echo "<div class='trainers-entry'>";
							
							echo "<div class='trainer-img' style='background-image: url(images/".$row['Path'].")'>"; 
							echo"</div>";
							?>
							
							<div class="desc">
								<h3>
								<?PHP
								echo $row['nom']; 
								?>
								 
								<?PHP
								echo $row['prenom']; 
								?>
								</h3>
								<?PHP
								echo "<span>";
								echo "Body Building Trainer" .$row['Id_coach']; echo "</span>";
								
								
							echo"</div>";
						echo "</div>";
						echo"</div>";
					}
					?>
					--></div>
					
					
<td>Id_cour</td>
<td><select size="3" name="lst1">
 <?php
    while ($row = mysqli_fetch_array($result)) {?>
 <option value="<?php echo $row['Id_cour'];?>"><?php echo $row['Id_cour'];?></option>
<?php
	}
	?>
</td>

form method="POST" action="usecode.php">
<table>
<caption>Utiliser Code</caption>
<tr>
<td>Montant</td>
<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "adam";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "select distinct(montant) from code";

// for method 2

$result2 = mysqli_query($connect, $query);

$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[0]</option>";
}

?>

<td>        <select name="montant">
        <?php echo $options;?> 
        </select>
</td>
</tr>
<tr>
<td>Code</td>
<td><input type="number" name="code" size="12" min="100000000000" max="999999999999"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="Utiliser" value="Utiliser"></td>
</tr>
</table>
</form>
