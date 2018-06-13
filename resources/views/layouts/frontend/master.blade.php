<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112536242-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-112536242-1');
	</script>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Хлопкопром</title>

    <meta name="author" content="Hitech - qaz-tech.kz" />
    <meta name="description" content="АХБК - хлопчатобумажный комбинат" />
    <meta name="keywords"  content="ключевые слова" /> 
    <meta name="viewport" content="width=device-width, height=device-height ,initial-scale=1">
    <meta property="og:title" content="АХБК - хлопчатобумажный комбинат">
    <meta property="og:type" content="website">
    <meta property="og:description" content="АХБК - хлопчатобумажный комбинат">
    <meta name="twitter:title" content="АХБК - хлопчатобумажный комбинат">
    <meta name="twitter:description" content="АХБК - хлопчатобумажный комбинат">
    <meta name="twitter:image" content="">
    <meta name="twitter:url" content="">
    <meta name="Resource-type" content="Document" />

    <link rel="canonical" href="http://ahbk.kz" />
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/remodal-default-theme.css">
    <link rel="stylesheet" href="css/remodal.css">

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/jquery.fullpage.css">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/styles.css') }}"> -->
    <link rel="stylesheet" href="css/newStyles.css">
    <link rel="stylesheet" href="css/newMobile.css">
    
    <!-- mystyles -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/mystyles.css') }}"> -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/mobile.css?'.time()) }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/ipadpro.css') }}">
    <meta name="apple-mobile-web-app-title" content="АХБК - хлопчатобумажный комбинат">
    <meta name="application-name" content="АХБК - хлопчатобумажный комбинат">

  	<style type="text/css">
  		@yield('styles')
  	</style>

    <!-- fontawesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

</head>
<body>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="" id="bar">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
      </a>
      <div class="links">
        <a href="/" class="homeLink" title="Главная">Главная</a>
        <!-- <a href="#" class="newsLink" title="Новости">Новости</a> -->
        <a href="/about" class="aboutLink" title="О компании">О компании</a>
        <a href="/products" class="catalogLink" title="Каталог продукции">Каталог продукции</a>
        <!-- <a href="#" class="skidkiLink" title="Скидки">Скидки и рассылки</a> -->
        <!-- <a href="#" class="addressLink" title="Где нас найти?">Где нас найти?</a> -->
        <a href="/contacts" class="contactsLink" title="Контакты">Контакты</a>
      </div>
    </div>
    <!-- Start mobile menu -->
    <span id="mMenuOpenBtn" class="" style="font-size:30px; cursor:pointer">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </span>
    <div id="mobileSideMenu" class="mobileSidenav">
      <a href="/" class="mMenu mMenu1" title="Главная">Главная</a>
      <a href="/about" class="mMenu mMenu2" title="О компании">О компании</a>
      <a href="/products" class="mMenu mMenu3" title="Каталог пролукции">Каталог продукции</a>
      <a href="/contacts" class="mMenu mMenu4" title="Контакты">Контакты</a>
    </div>
    <!-- End mobile menu -->
    @yield('content')

    @include('frontend.partials._langs')

  <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="js/jquery.fullpage.js"></script>
  <script src="{{ asset('js/jquery.maskedinput.js') }}"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="{{ asset('js/jquery.touchSwipe.js') }}"></script>
  <script src="{{ asset('js/scroll.js') }}"></script>
  <script src="{{ asset('js/remodal.min.js') }}"></script>

  <script type="text/javascript">
      $(document).ready(function() {
          
          @yield('scripts_body')

          //Определяю ширину экрана
          var size = $(window).width();
          //Если ширина экрана юольше 991px то инитиализирую fullpage, иначе не инициализирую, такми образом на мобильных экранах fullpage не будет инициализироваться а не desktop будет
          if (size > '991'){

            $('#fullpage').fullpage({
              // scrollBar: true,
              normalScrollElements: '.scrollable-element',
            });
          }

          //bootstrap slider
          $('.carousel').carousel({
            interval: 10000,
            pause: "false",
          });

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

          $(".searchInput").focus(function(){
            $(this).data('value',$(this).attr('value'));
            $(this).attr('value', '')
          });

          $(".searchInput").blur(function(){
            $(this).attr('value', $(this).data('value'));
          });
      });
  </script>
  <script src="js/script.js"></script>
  <script>
      /* Google Analytics (Do not copy this!!) */
  </script>
</body>
</html>