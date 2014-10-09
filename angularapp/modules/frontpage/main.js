var frontpageController;

frontpageController = ['$scope', '$state', function($scope, $state) {}];

define([], function() {
  var frontpage;
  frontpage = angular.module('Frontpage', ['ui.router']);
  frontpage.config([
    '$stateProvider', function($stateProvider) {
      return $stateProvider.state("index", {
        url: "/",
        templateUrl: "/angularapp/modules/frontpage/views/index.html",
        controller: frontpageController
      });
    }
  ]);
  return frontpage;
});
