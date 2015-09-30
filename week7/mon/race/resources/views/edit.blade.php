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
                <div class="title">Edit Racer</div>
                <form action="" method="POST">
                    {!! csrf_field() !!}

                    <label>Name:
                        <input type="text" name="name" value="{{$racer['name']}}">
                    </label>
                    <br>
                    <label>Age:
                        <input type="number" name="age" value="{{$racer['age']}}">
                    </label>
                    <br>
                    <button type="submit" name="save">Update</button>
                    <a href="/racers">Cancel</a>
                </form>
            </div>
        </div>
        <div>
            <a href="/">Home</a>
            <a href="/races">Races</a>
            <a href="/racers">Racers</a>
        </div>
    </body>
</html>