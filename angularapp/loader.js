"use strict";

/**
Require.js Configuration

Will launch the application
 */
require.config({
  shim: {
    angular: {
      exports: "angular"
    },
    'angular-ui-router': {
      deps: ['angular']
    }
  },
  paths: {
    angular: "../vendor/angular/angular",
    "angular-bootstrap": "../vendor/angular-bootstrap/ui-bootstrap-tpls",
    "angular-ui-router": "../vendor/angular-ui-router/release/angular-ui-router",
    "angular-underscore-module": "../vendor/angular-underscore-module/angular-underscore-module",
    bootstrap: "../vendor/bootstrap/dist/js/bootstrap",
    underscore: "../vendor/underscore/underscore",
    jquery: "../vendor/jquery/dist/jquery",
    requirejs: "../vendor/requirejs/require",
    domReady: '../vendor/requirejs-domready/domReady'
  },
  priority: ["angular"]
});

require(["angular", "angular-ui-router", "app"]);