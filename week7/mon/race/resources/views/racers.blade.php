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

             li{
                list-style-type:none;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Racers</div>
            </div>
            <div>
                <ul>
                   @foreach($racers as $racer)
                    <li><a href="/racers/{{$racer['racerID']}}">{{ $racer['name'] }}</a>
                    <form action="/racers/{{$racer['racerID']}}/delete" method="POST">
                    {{ csrf_field() }}
                    <button>X</button></form></li>
                   @endforeach
                </ul>

                <a href="/AddRacer"><button>Add Racer</button></a>
            </div>
        </div>
        <div>
            <a href="/">Home</a>
            <a href="/races">Races</a>
        </div>
    </body>
</html>