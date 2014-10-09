"use strict"

define([
  # Load angular modules
  'angular-ui-router'
], (router) ->
  app = angular.module 'tabs', [
    'ui.router'

    'Frontpage'
    # "ui.bootstrap"
  ]

  app.controller "AppCtrl", [
    "$scope"
    ($scope) ->
      $scope.laravel =
        url: "http://laravel.com"
        title: "Laravel PHP Framework"

      $scope.message = "You have arrived."
  ]

  # Application Routes
  app.config [
    '$locationProvider'
    ($locationProvider) ->
      $locationProvider.html5Mode true
  ]

  return app
)
