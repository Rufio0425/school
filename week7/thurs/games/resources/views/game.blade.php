<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Game</title>
		<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
		<style>
		    html, body {
		        height: 100%;
		    }

		    body {
		        background-color: grey;
		        margin: 0;
		        padding: 0;
		        width: 100%;
		        display: table;
		        font-weight: 900;
		        font-family: 'Lato';
		    }

		    .container {
		        text-align: center;
		        display: table-cell;
		        vertical-align: middle;
		    }

		    .content {
		        text-align: center;
		        display: inline-block;
		    }

		    .title {
		        font-size: 96px;
		    }
		</style>
	</head>
	<body>
		<div class="container">
			<h1><a href="/">Home</a></h4>
			<div class="title">Game Details</div>
			<div class="content">
				<div><h3>Game:{{$game->name}}</h3></div>
				<div>Year:{{$game->year}}</div>
				<a href="{{$game->id}}/edit">Edit</a> <a href="">Delete</a>
			</div>
		</div>
	</body>
</html>