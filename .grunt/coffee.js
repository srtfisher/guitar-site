module.exports = {
  coffee: {
    expand: true,
    options: {
      bare: true,
    },
    src: [
      'angularapp/*.coffee',
      'angularapp/**/*.coffee',
    ],
    dest: './',
    ext: '.js'
  }
};
