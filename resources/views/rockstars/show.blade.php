<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Boone | Project 3 | CSCI E-15</title>
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="../css/styles.css">
    <!-- <link href='https://fonts.googleapis.com/css?family=Arvo|Oswald:400,300' rel='stylesheet' type='text/css'> -->

    <link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,300,500,700|Roboto+Slab:400,700' rel='stylesheet' type='text/css'>

    <!-- <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'> -->
</head>

<body>
<div class="row collapse fullWidth">
    <div class="small-12 columns">
        @foreach($rockstars as $rockstar)
        <div class="profile">
            <div class="artist">
                <img src="{!! $rockstar->profilePic !!}">
                <p>{!! $rockstar->artistName !!}</p>
            </div>
            <div class="callout secondary profileInfo">
                <div>
                    <p><span class="attribute">Birth Name</span>: {!! $rockstar->birthName !!}</p>
                    <p><span class="attribute">Birthplace</span>: {!! $rockstar->birthPlace !!}</p>
                    <p><span class="attribute">Birthdate</span>: {!! $rockstar->birthDate !!}</p>
                    <p><span class="attribute">Band(s)</span>: {!! $rockstar->bandName !!}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</body>
</html>
