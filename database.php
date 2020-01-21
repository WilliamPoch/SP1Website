<?php
require __DIR__ . '/env.php'; 
$app = array();
$app['bucket_name'] = "library-258507.appspot.com";
$app['mysql_user'] = $mysql_user;
$app['mysql_password'] = $mysql_password;
$app['mysql_dbname'] = "counter";
$app['project_id'] = getenv('library-258507');

$servername = null;
$username = $app['mysql_user'];
$password = $app['mysql_password'];
$dbname = $app['mysql_dbname'];
$dbport = null;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, 
	$dbport, "/cloudsql/library-258507:us-central1:library1234");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// echo "\nConnected successfully\n";
// echo "\ntesting gcloud php\n";
?>


<!-- $conn = mysqli_connect("35.224.164.95", "root", "navin1234","count") or die ("error".mysqli_error()); -->

