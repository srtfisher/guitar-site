"use strict"

###*
Require.js Configuration

Will launch the application
###
require.config
  # shim:

  paths:
    # angular: "../vendor/angular/angular"
    "angular-bootstrap": "../vendor/angular-bootstrap/ui-bootstrap-tpls"
    "angular-ui-router": "../vendor/angular-ui-router/release/angular-ui-router"
    "angular-underscore-module": "../vendor/angular-underscore-module/angular-underscore-module"
    bootstrap: "../vendor/bootstrap/dist/js/bootstrap"
    underscore: "../vendor/underscore/underscore"
    jquery: "../vendor/jquery/dist/jquery"
    requirejs: "../vendor/requirejs/require"
    domReady: '../vendor/requirejs-domready/domReady'

  priority: ["angular"]


# http://code.angularjs.org/1.2.1/docs/guide/bootstrap#overview_deferred-bootstrap
window.name = "NG_DEFER_BOOTSTRAP!"

require [
  'app'
  'modules/frontpage/main'
], (app) ->
  "use strict"
  $html = angular.element(document.getElementsByTagName("html")[0])

  angular.element().ready ->
    angular.resumeBootstrap [app["name"]]
    return
