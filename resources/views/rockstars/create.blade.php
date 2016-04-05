<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Boone | Project 3 | CSCI E-15</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="modalRock">
    <ul class="menu">
        <li><a href="/">Home</a></li>
        <li><a href="#">OKC Lorem Ipsum</a></li>
    </ul>
    <p>The Random Rock Star Generator is a user profile generator done with a musical twist. If you're a developer looking for placeholder profiles for your app you've come to the right place! Instead of using the random profiles of a bunch of nobodies, though, why not use the profiles of your favorite rock stars?!</p>

    <p>You can generate up to 99 randomly-selected profiles at a time using the form below.</p>

    <form method='POST' action='show'>
       {{  csrf_field()  }}
    <input type='text' name='number'>
    <input type='submit' value='Submit'>
    </form>
</div>

<script src="bower_components/jquery/dist/jquery.js"></script>
<script src="bower_components/what-input/what-input.js"></script>
<script src="bower_components/foundation-sites/dist/foundation.js"></script>
<script src="js/min/app-min.js"></script>
</body>
</html>
