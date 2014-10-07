module.exports = {
  font: {
    files: [{
      expand: true,
      cwd: 'assets/img',
      src: [ '**/*.{<%= fonts.extensions %>}' ],
      dest: 'public/img/'
    }]
  },

  image: {
    files: [{
      expand: true,
      cwd: 'assets/img',
      src: [ '**/*.{<%= images.extensions %>}' ],
      dest: 'public/img/'
    }]
  },
};
