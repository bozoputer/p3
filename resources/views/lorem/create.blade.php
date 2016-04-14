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
        }
    </style>
</head>
<body>
<ul class="menu menu-lorem">
    <li><a href="/">Home</a></li>
    <li><a href="/rockstars/create">Random Rockstar</a></li>
</ul>

<div class="row generateLorem">
    <div class="small-12 medium-8 medium-centered columns">
        <img src="../img/thinicewaving.gif" alt="Thin ice">
        <p><span class="appName">The OK Computer Lorem Ipsum Generator</span> creates dummy text, but with a twist. Instead of the typical <i><a href="http://www.lipsum.com/" target="_blank">Lorem ipsum dolor sit amet...</a></i> blah blah blah, it uses words from the song lyrics of Radiohead's seminal late-nineties album, <cite><a href="https://en.wikipedia.org/wiki/OK_Computer" target="_blank">Ok Computer</a></cite>.</p>

        <p>Enter a number between 2 and 6 into the form below to generate paragraphs of dummy text.</p>

        <form method='POST' action='show'>
            {{  csrf_field()  }}
            <div class="input-group">
                <span class="input-group-label">Paragraphs</span>
                <input class="input-group-field" name="number" type="number" placeholder="2" pattern="number">
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
