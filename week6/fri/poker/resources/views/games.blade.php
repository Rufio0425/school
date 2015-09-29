<!DOCTYPE html>
<html>
    <head>
        <title>Games</title>

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

            ul > li {
                list-style-image: url('https://cdn4.iconfinder.com/data/icons/gambling-line-icons-vol-1/48/45-64.png');
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Games</div>

            </div>
            <ul>
                @foreach ($games as $game)
                <li><a href="/games/{{$game['gameID']}}">{{$game['gameName']}} (3)</li>
                @endforeach
            </ul>
            
        </div>
        <nav>
            <a href="/">Home</a>
            <a href="/games">Games</a>
            <a href="/players">Players</a>
        </nav>

    </body>
</html>
