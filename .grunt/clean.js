module.exports = {
  prod: [
    "app/views/angularjs/application-production.php",
    "public/angularapp",
    "public/angularapp.js",
    "public/vendors.js",
    "public/styles.css",
    "!angularapp/loader.js"
  ],

  dev: [
    "public/angularapp",
    "public/css",
    "public/img",
    "public/vendor",
    "!angularapp/loader.js"
  ],

  compiled: [
    "angularapp/**.js",
    "angularapp/*.js",
    "assets/css/*.css",
    "!angularapp/loader.js"
  ]
};
