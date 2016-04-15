<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Boone | Project 3 | CSCI E-15</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,300,500,700|Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="row fullWidth">
  <div class="large-6 columns rockstar">
    <a href="rockstars/create"><img src="img/logo-rock1.png" class="rockLogo" alt="Random rockstar generator"></a>
  </div>
  <div class="large-6 columns lorem">
    <a href="lorem/create"><img src="img/logo-lorem1.png" class="loremLogo" alt="Ok Computer Lorem Ipsum"></a>
  </div>
</div>

<!-- MODAL WINDOW -->
<div id="intro" class="reveal" data-reveal data-overlay="false" data-animation-in="spin-in" data-animation-out="spin-out">
  <h2>Welcome to Developer's Best Friend!</h2>
  <p>Developer's Best Friend is a suite of tools to help software developers during the application development process.</p>
  <p>Similar tools can be found in myriad other places on the Internet, but ours are way cooler :)</p>
  <button class="close-button" data-close aria-label="Close reveal" type="button">
   <span aria-hidden="true">&times;</span>
 </button>
</div>

<script src="bower_components/jquery/dist/jquery.js"></script>
<script src="bower_components/what-input/what-input.js"></script>
<script src="bower_components/foundation-sites/dist/foundation.js"></script>
<script src="js/min/app-min.js"></script>

<script>
$(document).ready(function(){
    $('#intro').foundation('open');
});
</script>


<script>
$(document).ready(function(){
    $( ".rockLogo" ).bind({
        focus: function() {
            $(this).attr("src","img/logo-rock2.png");
        },
        mouseenter: function() {
            $(this).attr("src","img/logo-rock2.png");
        },
        mouseleave: function() {
            $(this).attr("src","img/logo-rock1.png");
        }
    });

    $( ".loremLogo" ).bind({
        focus: function() {
            $(this).attr("src","img/logo-lorem2.png");
        },
        mouseenter: function() {
            $(this).attr("src","img/logo-lorem2.png");
        },
        mouseleave: function() {
            $(this).attr("src","img/logo-lorem1.png");
        }
    });
});
</script>
</body>
</html>
