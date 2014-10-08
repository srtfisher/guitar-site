define [
  'angular-ui-router'
], ->
  'use strict'

  app = angular.module 'tabs'
  console.log 'adding app.config'
  return app.config [
    '$stateProvider'
    ($stateProvider) ->

      # Define States
      console.log 'define states'
  ]
