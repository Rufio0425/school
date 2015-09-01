<?php 

$colors = ['red', 'green', 'blue', 'yellow', 'pink', 'orange', 'purple', 'black', 'lime', 'teal'];

$colors2 = [];

foreach($colors as $color){
	if(strlen($color)<=4){
		$colors2[] = $color;
	}
}

print_r ($colors2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Colors</title>
</head>
<body>
	<select name="opt"><?= $opt?></select>
</body>
</html>