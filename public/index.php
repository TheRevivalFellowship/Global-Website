<?php

function inc_src($path) {
    include('../src/' . $path);
}

?><!doctype html>
<html lang="en" ng-app="FellowshipFinder">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Revival Fellowship</title>
    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/website.min.css?m=2015.01.10">

</head>
<body ng-controller="FindFellowshipController as ffc">

    <?php inc_src('header/header.php'); ?>
    <?php inc_src('find-fellow/find-fellow.php'); ?>
    <?php inc_src('social/social.php'); ?>
    <?php inc_src('news-events/news-events.php'); ?>
    <?php inc_src('links/links.php'); ?>
    <?php inc_src('footer/footer.php'); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="assets/js/ngGeolocation.min.js"></script>
    <script src="assets/js/website.min.js?m=2015.01.10"></script>

</body>
</html>
