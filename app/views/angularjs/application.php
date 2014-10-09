<!DOCTYPE html>
<html lang="en" ng-app="tabs">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabs</title>
    <meta name="environment" content="<?php echo App::environment(); ?>">

    <!-- build:css(assets/) /styles.css -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700,300|Vollkorn:400,700' rel='stylesheet' type='text/css'>
    <link href="/css/screen.css" rel="stylesheet">
    <script src="/vendor/angular/angular.js"></script>
    <script data-main="angularapp/loader" src="/vendor/requirejs/require.js"></script>
  </head>
  <body ng-controller="AppCtrl">
    <div ng-include="'angularapp/modules/application/views/header.html'"></div>

    <header class="global-header">
      <div class="container">
        <div class="col-sm-6 col-md-4">
          <a href="/">
            <img src="/img/header/logo.png" width="180" height="40">
          </a>
        </div>

        <div class="col-sm-6 col-md-8">
          <nav>
            <ul>
              <li>
                <a href="#">Shop</a>
              </li>

              <li>
                <a href="#">Directory</a>
              </li>

              <li>
                <a href="#">Contact</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <section class="spotlight">
      <h4>Discover the best tabs for your taste.</h4>
    </section>

    <div class="container about-area">
      <p>
        Help learn how to play the Acoustic Guitar while learning about great
        music. Expand your horizons now.
      </p>
    </div>

    <div class="container">
      <div class="row product-listing">
        <div class="col-sm-12 col-md-4 col-lg-4">
          <a href="#" class="product">
            <img src="http://placekitten.com/400/450">
            <h4 class="product-title">
              Tabs for Sale
            </h4>
            <h5 class="product-price">$15</h5>
          </a>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4">
          <a href="#" class="product">
            <img src="http://placekitten.com/400/450">
            <h4 class="product-title">
              Tabs for Sale
            </h4>
            <h5 class="product-price">$15</h5>
          </a>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4">
          <a href="#" class="product">
            <img src="http://placekitten.com/400/450">
            <h4 class="product-title">
              Tabs for Sale
            </h4>
            <h5 class="product-price">$15</h5>
          </a>
        </div>
      </div>
    </div>

    <footer class="global-footer">
      <div class="container">
        <p>
          &copy; 2014 Twelvemonth Music
        </p>

        <ul>
          <li>
            <a href="/">Home</a>
          </li>
          <li>
            <a href="/about">About</a>
          </li>
          <li>
            <a href="/shop">Shop</a>
          </li>
          <li>
            <a href="/contact">Contact</a>
          </li>
        </ul>
      </div>
    </footer>

    <div ui-view></div>

    <?php if (App::environment() === 'local') : ?>
      <script type="text/javascript" src="http://localhost:35729/livereload.js"></script>
    <?php endif; ?>
  </body>
</html>
