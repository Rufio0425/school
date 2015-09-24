<?php 

try {
	$db = new PDO('mysql:host=localhost;dbname=pos;charset=utf8', 'root');

	// print_r($db);

	$statement = $db->prepare('SELECT * FROM Customers');
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
	<title>Customers</title>
</head>
<body>
	<h1>Customers</h1>

	<table>
		<tr>
			<td>ID</td>
			<td>Email</td>
			<td>Shipping Address</td>
			<td>Billing Address</td>
			<td>First Name</td>
			<td>Last Name</td>

		</tr>
		<?php foreach($results as $row) { ?>

		<tr>
			<td><?= $row["CustomerID"] ?></td>
			<td><?= $row["Email"]?></td>
			<td><?= $row["ShippingAddress"]?></td>
			<td><?= $row["BillingAddress"]?></td>
			<td><?= $row["FirstName"]?></td>
			<td><?= $row["LastName"]?></td>
		</tr>

		<?php } ?>
	</table>
</body>
</html>