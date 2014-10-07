(function() {
  "use strict";
  var app;

  app = angular.module("tabs", ["underscore", "ui.bootstrap", "ExampleModule"]);

  app.controller("AppCtrl", [
    "$scope", function($scope) {
      $scope.laravel = {
        url: "http://laravel.com",
        title: "Laravel PHP Framework"
      };
      return $scope.message = "You have arrived.";
    }
  ]);

}).call(this);
