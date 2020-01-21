<?php
header('Content-Type: application/json');

require('database.php');

$sqlQuery = "SELECT * FROM counta";
$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($dbc);

echo json_encode($data);
?>