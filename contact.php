<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Contact</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
</head>
<body>
	<?php

error_reporting(E_ALL);
if (is_null($_POST['first_name'])) {
	$greeting = 'Please complete all fields';
} else {
	$greeting = 'Share your information';
}

function print_r2($array)
{
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}

function assemblePage()
{
	$html = '<h1>' . $GLOBALS['greeting'] . '</h1>';
	$html .= '<form action="" method="POST">
	</br><label>First Name</label></br>			
	<input type="text" name="first_name" />
	</br><label>Last Name</label></br>
	<input type="text" name="last_name" />
	</br><label>Email</label></br>
	<input type="email" name="email "/>
	</br><label>Write A Message</label></br>
	<textarea name="message" cols="30" rows="10"></textarea></br>
	<button type="submit">Submit</button>';

	return $html;
}

echo assemblePage();

print_r2($GLOBALS);


?>

</body>
</html>