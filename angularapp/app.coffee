"use strict"

define(['angular'], (angular) ->
  console.log angular

  app = angular.module "tabs", [
    # "ui.bootstrap"
    # "ExampleModule"
  ]

  app.controller "AppCtrl", [
    "$scope"
    ($scope) ->
      $scope.laravel =
        url: "http://laravel.com"
        title: "Laravel PHP Framework"

      $scope.message = "You have arrived."
  ]

  return app
)
