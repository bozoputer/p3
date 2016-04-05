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
<div class="row fullWidth">
  <div class="large-6 columns rockstar">
    <a href="rockstars/create"><img src="img/logo-rock1.png" class="rockLogo" alt="Random rockstar generator"></a>
  </div>
  <div class="large-6 columns lorem">
    <a href="lorem/create"><img src="img/logo-lorem1.png" class="loremLogo" alt="Ok Computer Lorem Ipsum"></a>
  </div>
</div>

<script src="bower_components/jquery/dist/jquery.js"></script>
<script src="bower_components/what-input/what-input.js"></script>
<script src="bower_components/foundation-sites/dist/foundation.js"></script>
<script src="js/min/app-min.js"></script>

<script  type='text/javascript'>
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
