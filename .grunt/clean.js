module.exports = {
  prod: [
    "app/views/angularjs/application-production.php",
    "public/angularapp",
    "public/angularapp.js",
    "public/vendors.js",
    "public/styles.css",
  ],

  dev: [
    "public/angularapp",
    "public/css",
    "public/img",
    "public/js",
    "public/json",
    "public/vendor",
  ],

  compiled: [
    "angularapp/**.js",
    "angularapp/*.js",
    "assets/css/*.css"
  ]
};
