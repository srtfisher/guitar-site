<!DOCTYPE html>
<html lang="en" ng-app="tabs">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabs</title>
    <meta name="environment" content="<?php echo App::environment(); ?>">

    <!-- build:css(assets/) /styles.css -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700,300|Vollkorn:400,700' rel='stylesheet' type='text/css'>
    <link href="/css/screen.css" rel="stylesheet">
    <script src="/vendor/angular/angular.js"></script>
    <script data-main="angularapp/loader" src="/vendor/requirejs/require.js"></script>
  </head>
  <body ng-controller="AppCtrl">
    <div ng-include="'angularapp/modules/application/views/header.html'"></div>

    <!-- ui-router view -->
    <div ui-view></div>

    <?php if (App::environment() === 'local') : ?>
      <script type="text/javascript" src="http://localhost:35729/livereload.js"></script>
    <?php endif; ?>
  </body>
</html>
