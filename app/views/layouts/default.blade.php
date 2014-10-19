
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Kwizine</title>
  <meta name="description" content="">

  <meta name="viewport" content="width=device-width">
  <link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
  {{ HTML::style('css/style.css')}}
  {{ HTML::style('css/main.css')}}
  {{ HTML::style('js/nivo-slider/themes/default/default.css')}}
  {{ HTML::style('js/nivo-slider/nivo-slider.css')}}


</head>
<body>
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
<div class="wrap">
    <!-- NAVIGATION -->
    <div id="nav">
    <div class="container clearfix">

        <!-- MENU -->
        <div id="navigation">
                <ul id="menu" class="menu">
                    <li ><a href="index.html">Home</a></li>
                    <li ><a href="articles.html">Blog</a></li>
                    <li ><a href="contact.html">Contact</a></li>

                </ul>

                <div class="membres">
                    <ul>
                        <li><a href="login.html">Se connecter</a></li>
                        <li><a href="signup.html">S'inscrire</a></li>
                    </ul>
                </div>

        </div> <!-- #navigation -->

        <div id="search">

            <form method="get" id="searchform" action="">
                <div>
                    <input type="text" value="Chercher" name="q" id="q" onfocus="if (this.value == 'Chercher') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Chercher';}" />
                    <input type="submit" id="searchsubmit" value="Go" />
                </div>
            </form>
        </div> <!--#search -->

    </div> <!-- container -->
    </div> <!--#nav -->

    <!-- HEADER -->
    <header>
        <div class="container clearfix">

            <div id="logo">
                <a href="index.html" title="kwizine">Kwizine</a>
            </div>
            <div id="reseaux">
                <ul>
                    <li><a href="fb" class="fb"></a></li>
                    <li><a href="twr" class="tt"></a></li>
                    <li><a href="gg" class="gg"></a></li>
                    <li><a href="yt" class="yt"></a></li>
                </ul>
            </div>
        </div> <!-- container -->
    </header>

    @yield('contenu')
<!-- FOOTER -->
<footer>
    <div class=" container clearfix">
        <p></p>
        <p>&copy; Kwizine 2014</p>
    </div>
</footer>

</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>
  <script type="text/javascript" src="js/nivo-slider/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</body>
</html>