<?php

function inc_src($path) {
    include('../src/' . $path);
}

?><!doctype html>
<html lang="en" ng-app="trf">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>The Revival Fellowship</title>
    <meta name="keywords" content="Spiritfilled, Jesus, Repentance, Baptism, Holy Ghost, Speaking in Tongues">
    <meta name="description" content="We believe in a God that is alive today, a bible that is the word of God and the born again experience of the Holy Spirit. A solid foundation in Christ.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="The Revival Fellowship - A solid foundation in Christ.">
	<meta property="og:description" content="We believe in a God that is alive today, a bible that is the word of God and the born again experience of the Holy Spirit.">
	<meta property="og:url" content="https://therevivalfellowship.com/">
	<meta property="og:image" content="https://therevivalfellowship.com/assets/img/title--facebook--ogimage.jpg">

    <!-- favicon and app icons generated at realfavicongenerator.net -->
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="apple-mobile-web-app-title" content="TRF">
	<meta name="application-name" content="TRF">
	<meta name="theme-color" content="#f5f5f5">
    
    <link rel="stylesheet" href="assets/css/index.min.css">

    <script src="https://use.typekit.net/ppd6ljk.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
    <script src="assets/js/ngGeolocation.min.js"></script>
    <script>
        (function () {
            'use strict';

            angular
                .module('trf', [

                    'ngGeolocation'
                    // ^^^ https://github.com/ninjatronic/ngGeolocation

                ]);

        })();
    </script>
    <script src="assets/js/website.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-2039520-11', 'auto');
	  ga('send', 'pageview');
	
	</script>
</head>
<body ng-controller="IndexController as ic" ng-class="'app-state--' + ic.state.get()">

    <main ng-controller="FindFellowshipController as vm" class="ng-cloak">
        <?php inc_src('header/header.php'); ?>
        <?php inc_src('find-fellow/find-fellow.php'); ?>
        <?php inc_src('social/social.php'); ?>
        <?php inc_src('news-events/news-events.php'); ?>
        <?php inc_src('links/links.php'); ?>
        <?php inc_src('footer/footer.php'); ?>
    </main>

</body>
</html>
