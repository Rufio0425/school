<!DOCTYPE html>
<html>
    <head>
        <title>Volunteers</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:s100" rel="stylesheet" type="text/css">
        <link href="" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
      {{--   <link rel="stylesheet" href="fonts/"> --}}
        <style>
            @font-face {
                font-family: 'LeagueGothicRegular';
                src: url('fonts/League_Gothic-webfont.eot');
                src: url('fonts/League_Gothic-webfont.eot?#iefix') format('embedded-opentype'), url('fonts/League_Gothic-webfont.woff') format('woff'), url('fonts/League_Gothic-webfont.ttf') format('truetype'), url('fonts/League_Gothic-webfont.svg#LeagueGothicRegular') format('svg');
                font-weight: normal;
                font-style: normal;
            }

            @font-face {
                font-family: 'NovecentowideBold';
                src: url('fonts/Novecentowide-Bold-webfont.eot');
                src: url('fonts/Novecentowide-Bold-webfont.eot?#iefix') format('embedded-opentype'), url('fonts/Novecentowide-Bold-webfont.woff') format('woff'), url('fonts/Novecentowide-Bold-webfont.ttf') format('truetype'), url('fonts/Novecentowide-Bold-webfont.svg#NovecentowideBold') format('svg');
                font-weight: normal;
                font-style: normal;
            }

            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                font-weight: 100;
            }

           /* .container {
                background-color: orange;
                text-align: center;
                display: inline-block;
                vertical-align: middle;
                color:white;
            }

            .content{
                font-family: 'NovecentowideBold';
                font-size: 100px;
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 200px;
                font-family:'LeagueGothicRegular';
            }*/
            

            header{
                display:flex;
                text-align:center;
                background-color: black;
                font-family:helvetica;
                position:fixed;
                width:100%;
                z-index:1000;
                transition: all .35s;
            }

            header:hover{
                padding:10px 0;
                background-color: purple;
            }

            .logo{
                text-align:left;
                background-color: orange;
                flex:1;
                padding:15px 70px;
            }

            .nav{
                background-color: red;
                flex:3;
                text-align:right;
                padding:15px 51px 15px;
            }

            .nav a{
                background-color: white;
                font-size:10pt;
                padding:10px;
            }

            .hero{
                padding-top:33px;
                width:100%;
                background-color: blue;
            }

            .main{
                margin-top:15px;
                color:black;
                width:74em;
                margin-left:auto;
                margin-right:auto;
                background-color: yellow;
            }

            .title{
                font-size:120px;
                text-align:center;
                background-color: green;
            }

            .title span{
                background-color: pink;
            }

            .vom{
                text-align:center;
                background-color: brown;
                padding:20px 0;
            }


            .vom_title{
                padding:10px;
                background-color: orange;
            }

            .vom_title span{
                font-size:50px;
                background-color: yellow;
            }

            .vom_pic{
                height:300px;
                width:300px;
                background-size:cover;
                display:inline-block;
            }
            
            .content{
                /*width:74em;
                margin-left:auto;
                margin-right:auto;*/
                background-color: green;
                display:flex;
                text-align:center;
            }

            aside{
                background-color: pink;
                width:100px;
            }

            .vol_name{
                font-size:25px;
            }


            .volunteers{
                display:flex;
                justify-content:center;
                width:74em;
                margin-left:auto;
                margin-right:auto;
                background-color:orange;
                text-align:center;
                padding:20px 0;
            }

            .vol_describe{
                width:400px;
                background-color: blue;
                font-family: 'helvetica';
                font-size:16pt;
            }

            .profiles{
                background-color: pink;
                flex-wrap:wrap;
                justify-content:center;
                display:flex;
            }

            .profile{
                background-color: red;
                margin:5px;
            }

            .profile_pic{
                height:200px;
                width:200px;
                background-size:cover;
                display:inline-block;
            }
        </style>
    </head>
    <body>
        {{-- <header>
            <div class="logo"><a href="">Skate After School</a></div>
            <div class="nav">
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">Who's Helping</a>
                <a href="">Team</a>
                <a href="">Give</a>
                <a href="">Contact</a>
                <a href="">Volunteer Application</a>
                <a href="">Donate</a>
                <a href="">Store</a>
            </div>
        </header> --}}
        <div class="panel hero">
            <div class="main">
                <div class="banner">
                    <div class="title"><span>Volunteers</span></div>
                </div>
                <div class="vom">
                    <div class="vom_title"><span>Volunteer of The Month</span></div>
                    <div class="vom_pic" style="background-image: url('http://assets.woodwardtv.com/media/thumbs/athlete/headshot/96157931_RYAN_LAY_HEADSHOT_.jpg.360x360_q85_crop-scale_upscale.jpg')"></div>
                    <div class="vol_name"><a href="">Ryan Lay</a></div>
                </div>
            </div>
        </div>
        <div class="panel content">
            
            <div class="volunteers">
                <div class="vol_describe">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati ea ad nemo fugiat fuga veritatis illo perferendis maxime id, eius, accusantium eos, rem odit esse neque ipsam dolorum, cumque blanditiis. Blah blah blah blah blah blah blah blah blah
                </div>

                <div class="profiles">
                    <div class="profile">
                        <div class="profile_pic" style="background-image: url('https://pbs.twimg.com/profile_images/639255203015843840/LRsc2YV7.jpg')"></div>
                        <div class="name"><a href="">Corey</a></div>
                    </div>
                    <div class="profile">
                        <div class="profile_pic" style="background-image: url('http://assets.woodwardtv.com/media/thumbs/athlete/headshot/96157931_RYAN_LAY_HEADSHOT_.jpg.360x360_q85_crop-scale_upscale.jpg')"></div>
                        <div class="name"><a href="">Ryan Lay</a></div>
                    </div>
                    <div class="profile">
                        <div class="profile_pic" style="background-image: url('https://pbs.twimg.com/profile_images/509758688924827648/79CWTWPo_400x400.jpeg')"></div>
                        <div class="name"><a href="">Caleb Schrank</a></div>
                    </div>
                    <div class="profile">
                        <div class="profile_pic" style="background-image: url('https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAAI-AAAAJDMzYzE3MWVkLTAzODUtNDcxNC04YTg0LWNlZmZmNWQ4NmNiOQ.jpg')"></div>
                        <div class="name"><a href="">Josh Eberhard</a></div>
                    </div>
                    <div class="profile">
                        <div class="profile_pic" style="background-image: url('http://3.bp.blogspot.com/-zNsGNYzYmg8/UbY2u2OtS4I/AAAAAAAAMbk/B0CJxtsrmys/s1600/vlad.jpg')"></div>
                        <div class="name"><a href="">Peter Vlad</a></div>
                    </div>
                    <div class="profile">
                        <div class="profile_pic" style="background-image: url('http://assets.woodwardtv.com/media/thumbs/athlete/headshot/ari.shiffrin.jpg.360x360_q85_crop-scale_upscale.jpg')"></div>
                        <div class="name"><a href="">Ari Shiffrin</a></div>
                    </div>
                    <div class="profile">
                        <div class="profile_pic" style="background-image: url('http://assets.woodwardtv.com/media/thumbs/athlete/headshot/ari.shiffrin.jpg.360x360_q85_crop-scale_upscale.jpg')"></div>
                        <div class="name"><a href="">Ari Shiffrin</a></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
