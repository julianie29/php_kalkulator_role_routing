<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<html lang="pl">
<head>
    <title>Kalkulator kredytowy</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{$config->app_url}/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="{$config->app_url}/assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper" class="fade-in">

    <!-- Intro -->
    <div id="intro">
        <h1>{$page_title|default:"Kalkulator kredytowy"}</h1>
        <p>{$page_description|default:"Darmowy kalkulator kredytowy, dzięki któremu w szybki i łatwy sposób obliczysz ratę swojego kredytu"}</p>
        <ul class="actions">
            <li><a href="#app_content" class="button icon solid solo fa-arrow-down scrolly">Przejdż do kalkulatora</a></li>
        </ul>
    </div>

    <!-- Header -->
    <header id="header">
        <a href="#app_content" class="logo">{$page_logo|default:"Kalkulator kredytowy"}</a>
    </header>

    <!-- Nav -->
    <nav id="nav">
        <ul class="links">
            <li class="active"><a href="#app_content">Kalkulator</a></li>
        </ul>
    </nav>

        <div id="app_content" class="content">

            {block name=content} Domyślna treść zawartości .... {/block}

        </div>

        <div class="footer l-box is-center">
            <p>
                {block name=footer} Domyślna treść stopki .... {/block}
            </p>
        </div>

    </div>

<!-- Scripts -->
<script src="{$config->app_url}/assets/js/jquery.min.js"></script>
<script src="{$config->app_url}/assets/js/jquery.scrollex.min.js"></script>
<script src="{$config->app_url}/assets/js/jquery.scrolly.min.js"></script>
<script src="{$config->app_url}/assets/js/browser.min.js"></script>
<script src="{$config->app_url}/assets/js/breakpoints.min.js"></script>
<script src="{$config->app_url}/assets/js/util.js"></script>
<script src="{$config->app_url}/assets/js/main.js"></script>

</body>
</html>