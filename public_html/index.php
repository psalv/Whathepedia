<!DOCTYPE html>
<html lang="en">

<head>

    <!--=========================================== WEBPAGE METADATA ====================================-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Whathepedia">
    <meta name="author" content="Paul Salvatore">

    <meta property="og:title" content="Whathepedia" />
    <meta property="og:site_name" content="Whathepedia" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://whathepedia.com" />
    <meta property="og:description" content="Testing your intuition" />
    <title>Whathepedia</title>

    <!-- Favicons
    ================================================== -->

    <link rel="shortcut icon" href="assets/img/favicon/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/img/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/img/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/img/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/img/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="assets/img/favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="assets/img/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="assets/img/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="assets/img/favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="assets/img/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="assets/img/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="assets/img/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="assets/img/favicon/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="assets/img/favicon/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="assets/img/favicon/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="assets/img/favicon/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="assets/img/favicon/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="assets/img/favicon/mstile-310x310.png" />
    <meta name="theme-color" content="#2196F3">

    <!--=========================================== CSS FILES ===========================================-->
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <!-- Custom Fonts -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Crimson+Text|Open+Sans" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/less/main.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109758431-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-109758431-3');
    </script>

</head>

<body>

<!--=========================================== MAIN FILES ==========================================-->
<?php
$page = "index-page";
$hasGmap = true;
?>

<div class="row">

    <div class="row text-center header">
        Whathepedia
    </div>

    <div class="row mainRow" id="fade">

        <div class="col-xs-4 text-center">
            <div class="centerContainer fullWidth">
                <div class="centerElement fullWidth size2">

                </div>
            </div>
        </div>

        <div class="col-xs-4 contentColumn">
            <div id="content"><div class="text-center" id="start">(Press space or click here to begin)</div></div>
        </div>

        <div class="col-xs-4">
            <div class="centerContainer fullWidth">
                <div class="centerElement fullWidth text-center size2">
                </div>
            </div>
        </div>

    </div>
</div>

<div class="row fullWidth text-center hidden" id="options">
    <div class="row fullWidth text-center">
        <div class="col-xs-6 left option"></div>
        <div class="col-xs-6 right option"></div>
    </div>
    <div class="row fullWidth text-center">
        <div class="col-xs-6 left option"></div>
        <div class="col-xs-6 right option"></div>
    </div>
</div>

<!--=========================================== JS SCRIPTS ==========================================-->

<!-- jQuery -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>

<!-- Bootstrap Core JavaScript -->
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!-- Plugin JavaScript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Additional JS Files-->
<script src="assets/ts/wikipedia.js" type="text/javascript"></script>


</body>
</html>
