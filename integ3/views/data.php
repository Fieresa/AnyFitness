<?php
header('Content-Type: application/json');

define('DB_HOST','127.0.0.1');
define('DB_USERNAME','root');
define('DB_PASSWORD', '');
define('DB_NAME', 'adam');

$mysqli = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

if(!$mysqli){
	die("connection failed: " . $mysqli->error);
}
$query=sprintf("SELECT nom , count(*) as 'count' FROM commandes inner join produit on produit=id group by nom ORDER BY nom");
$result=$mysqli->query($query);
$data=array();
foreach ($result as $row) {
	$data[] = $row;
}

$result->close();
$mysqli->close();
print json_encode($data);
?>