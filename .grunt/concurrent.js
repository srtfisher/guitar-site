module.exports = {
  options: {
    logConcurrentOutput: true,
    limit: 20
  },
  frontend: {
    tasks: [
      'shell:artisan',
      'customWatch:livereload'
    ]
  }
};
