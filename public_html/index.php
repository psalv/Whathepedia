<!DOCTYPE html>
<html lang="en">

<head>

    <!--=========================================== WEBPAGE METADATA ====================================-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Whatapedia">
    <meta name="author" content="Paul Salvatore">

    <meta property="og:title" content="Whatapedia" />
    <meta property="og:site_name" content="Whatapedia" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://whatapedia.com" />
    <meta property="og:description" content="Wikipedia trivia" />
    <title>Whatapedia</title>

    <!-- Favicons
    ================================================== -->

    <link rel="shortcut icon" href="assets/img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#2196F3">
    <meta name="msapplication-TileImage" content="assets/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#2196F3">

    <!--=========================================== CSS FILES ===========================================-->
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <!-- Custom Fonts -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Crimson+Text|Open+Sans" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/less/main.css">

    <!-- TODO: Add google analytics -->

</head>

<body>

<!--=========================================== MAIN FILES ==========================================-->
<?php
$page = "index-page";
$hasGmap = true;
?>

<div class="row">

    <div class="row text-center header">
        Whatapedia
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

<div class="row fullWidth text-center">
    <div class="row fullWidth text-center hidden" id="options">
        <div class="row fullWidth text-center">
            <div class="col-xs-6 option"></div>
            <div class="col-xs-6 option"></div>
        </div>
        <div class="row fullWidth text-center">
            <div class="col-xs-6 option"></div>
            <div class="col-xs-6 option"></div>
        </div>
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
