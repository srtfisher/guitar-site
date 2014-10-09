frontpageController = [
  '$scope'
  '$state'

  ($scope, $state) ->

]

define [], ->
  frontpage = angular.module 'Frontpage', ['ui.router']

  frontpage.config [
    '$stateProvider'
    ($stateProvider) ->

      $stateProvider.state "index",
        url: "/"
        templateUrl: "/angularapp/modules/frontpage/views/index.html"
        controller: frontpageController
  ]

  return frontpage
