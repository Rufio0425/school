<?php 

try {
	$db = new PDO('mysql:host=localhost;dbname=pos;charset=utf8', 'root');

	// print_r($db);

	$statement = $db->prepare('SELECT * FROM Orders');
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
	<title>Orders</title>
</head>
<body>
	<h1>Orders</h1>

	<table>
		<tr>
			<td>ID</td>
			<td>OrderDate</td>
			<td>CustomerID</td>
		</tr>
		<?php foreach($results as $row) { ?>

		<tr>
			<td><?= $row["OrderID"] ?></td>
			<td><?= $row["OrderDate"]?></td>
			<td><?= $row["CustomerID"]?></td>
		</tr>

		<?php } ?>
	</table>
</body>
</html>