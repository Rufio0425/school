<?php 

try {
	$db = new PDO('mysql:host=localhost;dbname=pos;charset=utf8', 'root');

	// print_r($db);

	$statement = $db->prepare('SELECT * FROM Items');
	$statement->execute();
	$results = $statement->fetchAll();

	// print_r($results);

} catch (PDOException $e) {
	echo "I'm sorry Sean";
    die($e->getMessage());
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Items</title>
</head>
<body>
	<h1>Items</h1>

	<table>
		<tr>
			<td>ID</td>
			<td>Description</td>
			<td>Cost</td>
		</tr>
		<?php foreach($results as $row) { ?>

		<tr>
			<td><?= $row["ItemID"] ?></td>
			<td><?= $row["Description"]?></td>
			<td><?= $row["Cost"]?></td>
		</tr>

		<?php } ?>
	</table>
</body>
</html>