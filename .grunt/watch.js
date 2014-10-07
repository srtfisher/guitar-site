module.exports = {
  // enable livereload, see http://livereload.com/
  // little hack to include symlinked file in livereload
  livereload: {
    files: [
      'angularapp/*.coffee',
      'angularapp/**/*.coffee',
      'assets/scss/**/*.scss',
      'assets/scss/*.scss',
      'app/views/angularjs/application.php'
    ],
    tasks: [
      'clean:compiled',
      'coffee',
      'sass'
    ],
    options: {
      livereload: true
    }
  }
};
