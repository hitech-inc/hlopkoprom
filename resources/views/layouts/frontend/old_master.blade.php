
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>АХБК - хлопчатобумажный комбинат</title>

    <meta name="author" content="Hitech - qaz-tech.kz" />
    <meta name="description" content="АХБК - хлопчатобумажный комбинат" />
    <meta name="keywords"  content="ключевые слова" />
    
    <meta name="viewport" content="width=device-width,initial-scale=1">
    

    <meta property="og:title" content="АХБК - хлопчатобумажный комбинат">
    <meta property="og:type" content="website">
    <meta property="og:description" content="АХБК - хлопчатобумажный комбинат">
    <!-- <meta property="og:image" content="">
    <meta property="og:url" content="https://alvarotrigo.com/fullPage/"> -->

    <!-- <meta name="twitter:card" content="photo">
    <meta name="twitter:site" content="@...">
    <meta name="twitter:creator" content="@..."> -->
    <meta name="twitter:title" content="АХБК - хлопчатобумажный комбинат">
    <meta name="twitter:description" content="АХБК - хлопчатобумажный комбинат">
    <meta name="twitter:image" content="">
    <meta name="twitter:url" content="">
    <meta name="Resource-type" content="Document" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- <link rel="stylesheet" type="text/css" href="/css/jquery.fullpage.min.css" /> -->
    <link rel="stylesheet" type="text/css" href="/css/styles.css">

    <link rel="canonical" href="http://ahbk.kz" />
    <!-- <link rel="stylesheet" href="css/bootstrap.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous"> -->

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- mystyles -->
    <link rel="stylesheet" type="text/css" href="/css/mystyles.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/mobile.css') }}">
<!-- 
    <link rel="dns-prefetch" href="https://buttons.github.io">
    <link rel="dns-prefetch" href="https://www.google-analytics.com">
    <link rel="dns-prefetch" href="https://connect.facebook.net"> -->

    <meta name="apple-mobile-web-app-title" content="АХБК - хлопчатобумажный комбинат">
    <meta name="application-name" content="АХБК - хлопчатобумажный комбинат">
    <!-- <meta name="msapplication-config" content="browserconfig.xml"> -->
    <!-- <meta name="theme-color" content="#ffffff"> -->

    <!--[if IE]>
        <script type="text/javascript">
             var console = { log: function() {} };
        </script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<div class="cotainer mycotainer" style="position: absolute; top: 20px; right: 60px; z-index: 3000;">
    @yield('header')
</div>


<a href="/" style="display: block; width: 100%; height: auto;">
    <div id="logo"></div>  
</a>


<div id="fullpage">
    @yield('content')
</div>

<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script> -->
<!-- <script src="js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="js/bootstrap-4.0.0-beta.3/js/bootstrap.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
<script src="js/bootstrap-4.0.0-beta.3/js/popper.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script> -->

<!-- <script type="text/javascript" src="/js/jquery.fullPage.min.js"></script> -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/jquery.touchSwipe.js"></script>

<!-- <script type="text/javascript">
    $(document).ready(function() {
        $('#fullpage').fullpage({
            sectionsColor: ['#ffffff', '#ECE9D8', '#ECE9D8', '#ECE9D8'],
            anchors: ['main', 'about', 'products', 'contacts'],
            menu: '#menu',
            css3: true,
            scrollingSpeed: 1000,
            scrollOverflow: true,
            responsiveWidth: 950
        }); 
    });
</script> -->

<script>
$(document).ready(function() {  

                    //Enable swiping...
                    $(".carousel-inner").swipe( {
                        //Generic swipe handler for all directions
                        swipeLeft:function(event, direction, distance, duration, fingerCount) {
                            $(this).parent().carousel('next'); 
                        },
                        swipeRight: function() {
                            $(this).parent().carousel('prev'); 
                        },
                        //Default is 75px, set to 0 for demo so any distance triggers swipe
                        threshold:0
                    });
                });
</script>

<script>
    /* Google Analytics (Do not copy this!!) */
</script>
</body>
</html>