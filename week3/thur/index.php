<?php
$states = ["state1" => "Arizona", "state2" => "California", "state3" => "Nevada"];
$options = "";
$msg = "";
$location = "";
foreach ($states as $key => $state){
	$options .= "<option value='$state'>$state</option>";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Valid Form</title>
</head>
<body>
	<form action="view.php" method="POST">
		Username:
			<input type="text" name="user" required>
			<br>
		Password:
			<input type="password" name="pass" required>
			<br>
		<strong>Gender</strong>
			<br>
			<label>
				Male:
				<input type="radio" name="sex" value="male">
				<br>
			</label>
			<label>
				Female:
				<input type="radio" name="sex" value="female">
				<br>
			</label>
		Please Select A State
			<select name="location">
				<?php echo $options ?>
			</select>
			<br>
		<button>Ok!</button>
	</form>
</body>
</html>