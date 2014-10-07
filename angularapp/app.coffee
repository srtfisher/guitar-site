"use strict"
app = angular.module("tabs", [
  "underscore"
  "ui.bootstrap"
  "ExampleModule"
])
app.controller "AppCtrl", [
  "$scope"
  ($scope) ->
    $scope.laravel =
      url: "http://laravel.com"
      title: "Laravel PHP Framework"

    $scope.message = "You have arrived."
]
