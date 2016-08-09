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
    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()</script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

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
