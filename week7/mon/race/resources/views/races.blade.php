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
                <div class="title">Races</div>
                <ul>
                @foreach($races as $race)
                    <li><a href="/races/{{$race['raceID']}}">{{$race['raceName']}}</a><button data="{{$race['raceID']}}">X</button></li>
                @endforeach
                </ul>
            <a href="/editor">New Race</a>

            <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
            <script>
                $(function(){
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': '{!! csrf_token() !!}'
                        }
                    });

                    $("button").on("click", function(e){
                        var raceID = $(this).attr("data");
                        var current = $(this).parent();
                        $.post("/api/removeRace", {raceID: raceID}, function(res){
                            current.remove();
                        });

                    });
                });

            </script>
            </div>
        </div>
        <a href="/">Home</a>
        <a href="/racers">Racers</a>

    </body>
</html>