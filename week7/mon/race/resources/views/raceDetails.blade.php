<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

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
                <div class="title">{{$race['raceName']}}</div>
                <div>{{gmdate('r', $race['startDate'])}}</div>
                <div>{{$race['location']}}</div>
                <div>{{$race['length']}}</div>
                <div><a href="/races/{{$raceID}}/racers">View Racers</a></div>
            </div>
        </div>
        <div>
            <a href="/">Home</a>
            <a href="/races">Races</a>
        <div>
    </body>
</html>