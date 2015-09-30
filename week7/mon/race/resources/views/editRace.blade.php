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
                <div class="title">Edit Race</div>
                <form action="" method="POST">
                    {!! csrf_field() !!}

                    <label>Race Name:
                        <input type="text" name="raceName" value="{{$race['raceName']}}">
                    </label>
                    <br>
                    <label>Start Date:
                        <input type="text" name="startDate" value="{{$race['startDate']}}">
                    </label>
                    <label>Location:
                        <input type="text" name="location" value="{{$race['location']}}">
                    </label>
                    <label>Length:
                        <input type="text" name="length" value="{{$race['length']}}">
                    </label>
                    <br>
                    <button type="submit" name="save">Update</button>
                    <a href="/races">Cancel</a>
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