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
			<div class="title">New Game</div>
			<div class="content">
				<form action="/games/create" method="POST">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
					<label>Game:
						<input type="text" name="name" placeholder="Game Name">
					</label>
					<br>
					<label>Year:
						<input type="text" name="year" placeholder="Release Year">
					</label>
					<br>
					<button>Add Game</button>
				</form>
			</div>
		</div>
	</body>
</html>