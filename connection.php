<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h1>HELLO ANIMALS</h1>

	<?php
$user = 'root';
$password = 'root';
$db = 'inventory';
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$success = mysqli_real_connect(
	$link,
	$host,
	$user,
	$password,
	$db,
	$port
);

if ($result = $link->query("SELECT * FROM Animals")) {
	printf("Select returned %d rows.\n", $result->num_rows);

	print_r($result->fetch_array());

	$result->close();
}

$sql = "SELECT * FROM animals";

$sth = $link->query($sql);

print_r($results);


?>
	
</body>
</html>	