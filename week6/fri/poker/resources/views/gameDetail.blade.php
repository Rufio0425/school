<!DOCTYPE html>
<html>
    <head>
        <title>Game Details</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
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
            <div class="content">
                <div class="title">Game Details {{ $game['gameID'] }}</div>
				<h3>{{ $game['gameName']}}</h3>
				<p>Players<a href="/games/{{ $game['gameID'] }}/players">(3)</a></p>
				<p>Open</p>
            </div>
        </div>
        <nav>
            <a href="/">Home</a>
            <a href="/games">Games</a>
            <a href="/players">Players</a>
        </nav>
    </body>
</html>
