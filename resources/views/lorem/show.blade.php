<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Boone | Project 3 | CSCI E-15</title>
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,300,500,700|Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <style>
        body {
            background-color: #fff;
            /*background-color: #d31557;*/
        }
    </style>
</head>

<body>
<ul class="menu menu-lorem">
    <li><a href="/lorem/create" class="back">back</a></li>
    <li><a href="/">Home</a></li>
    <li><a href="/rockstars/create">Random Rockstar</a></li>
</ul>
<div class="row collapse fullWidth loremMain">
    <div class="small-12 medium-8 medium-centered columns">

        <img src="../img/thinicewaving.gif" alt="Thin ice">

        @foreach($paragraphs as $paragraph)
            <p>{!! $paragraph !!}</p>
        @endforeach
    </div>
</div>
</body>
</html>
