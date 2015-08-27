<?php

$query = '';
if(isset($_GET['query'])){
	$query = $_GET['query'];
}

$animals = ['dog', 'cat', 'fish', 'duck','horse', 'bird', 'dodo', 'donkey', 'catfish', 'dung beetle'];
$msg = '';
$results = [];
if($query){
	$q_len = strlen($query);

	foreach($animals as $animal){
		if($query === substr($animal, 0, $q_len)){
			array_push($results, $animal);
		} 
	
	
	if(count($results) === 0){
		$msg = 'We couldn\'t find it';
	} else {
		$msg = implode($results, '<br>');
	}

	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Loops 2</title>
</head>
<body>
	

	<form action="">
		Search: <input type="text" name="query">
		<button>Go</button>
	</form>
	
	<hr>

	<?= $msg ?>
</body>
</html>