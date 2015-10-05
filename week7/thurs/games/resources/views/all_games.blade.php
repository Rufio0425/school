<!DOCTYPE html>
<html>
    <head>
        <title>Best Games Ever!</title>
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
            <div class="title">Best Games Ever</div>
            <div class="content">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Year</th>
                        <th>Edit</th>
                        <th>Delete</th>    
                    </tr>

                    @foreach($games as $game)
                    <tr>
                        <td>{{$game->id}}</td>
                        <td><a href="games/{{$game->id}}">{{$game->name}}</a></td>
                        <td>{{$game->year}}</td>
                        <td><a href="games/{{$game->id}}/edit">Edit</a></td>
                        <td><a href="">Delete</a></td>
                    </tr>
                    @endforeach
                </table>
                <div><a href="games/create">New Game</a></div>
            </div>
        </div>
    </body>
</html>
