<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link href='//fonts.googleapis.com/css?family=OFL+Sorts+Mill+Goudy+TT' rel='stylesheet'> 
        <link rel="stylesheet" href="{{ url(theme_path('css/normalize.css')) }}">
        <link rel="stylesheet" href="{{ url(theme_path('css/main.css')) }}">
        <script src="{{ url(theme_path('js/vendor/modernizr-2.6.2.min.js')) }}"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div class="container">
            <header>
                <h1><a href="{{ url('/') }}">{{ site_title() }}</a></h1>
                <nav>
                  <ul>
                    <li><a href="{{ url('archive') }}">posts</a></li>
                    <li><a href="{{ url('about') }}">about</a></li>
                    <li><a href="{{ url('rss') }}">rss</a></li>
                  </ul>
                </nav>
            </header>
            <!-- Add your site or application content here -->
            <div class="content">
                @yield('content')
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{ url(theme_path('js/vendor/jquery-1.9.1.min.js')) }}"><\/script>')</script>
        <script src="{{ url(theme_path(js/plugins.js)) }}"></script>
        <script src="{{ url(theme_path(js/main.js)) }}"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
