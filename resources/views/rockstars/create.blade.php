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
            background-color: #544B8D;
        }
    </style>
</head>
<body>
<ul class="menu">
    <li><a href="/">Home</a></li>
    <li><a href="/lorem/create">OKC Lorem Ipsum</a></li>
</ul>

<div class="row generateRock">
    <div class="small-12 medium-8 medium-centered columns">
        <img src="../img/lightningBolt_home.png" alt="Lightning Bolt">
        <p><span class="appName">The Random Rock Star Generator</span> is a user profile generator done with a musical twist.</p>

        <p>If you're a developer looking for placeholder profiles for your app you've come to the right place! Instead of using the random profiles of a bunch of made-up nobodies, though, why not use the profiles of some your favorite rock stars?</p>

        <p>Enter a number between 3 and 12 into the form below to generate some randomly-selected profiles.</p>

        <form method='POST' action='show'>
            {{  csrf_field()  }}
            <div class="input-group">
                <span class="input-group-label">Users</span>
                <input class="input-group-field" name="number" type="number" placeholder="6" pattern="number">
                <div class="input-group-button">
                    <input type="submit" class="button" value="Submit">
                </div>
            </div>
        </form>

        @if (count($errors) > 0)
            <div class="errors">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>


</div>



<script src="../bower_components/jquery/dist/jquery.js"></script>
<script src="../bower_components/what-input/what-input.js"></script>
<script src="../bower_components/foundation-sites/dist/foundation.js"></script>
<script src="../js/min/app-min.js"></script>
</body>
</html>
