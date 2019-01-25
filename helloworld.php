<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hello World PHP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php
	//shows all errors off by default
error_reporting(E_ALL);
//echo will make this readable and rendered as html
if (is_null($_POST['first_name'])) {
	$hello_world = 'Hello World!';
} else {
	$hello_world = 'Hello ' . $_POST[' first_name '] . ' ' . $_POST['last_name'];
}
//debug function
function print_r2($array)
{
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}

function assemblePage()
{
	$html = '<h1>' . $GLOBALS['hello_world'] . '</h1>';

	$html .= '<ul>';
	for ($i = 0; $i <= 10; $i++) {
		$html .= '<li>' . $i . '</li>';
	}
	$html .= '</ul>';
	return $html;
}
echo assemblePage();

print_r2($GLOBALS);
?>

<form action="" method="">
	<input type="text" name="first_name"/>
	<input type="text" name="last_name"/>
	<button type="submit">Submit</button>
</form>
</body>
</html>