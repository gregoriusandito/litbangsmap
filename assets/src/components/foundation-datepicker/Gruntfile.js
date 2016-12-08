module.exports = function(grunt) {
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  // grunt.registerTask('build', ['uglify', 'sass', 'cssmin']);
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.registerTask('default', ['uglify', 'sass', 'cssmin','watch']);


  grunt.initConfig({
    uglify: {
      my_target: {
        files: {
          'js/foundation-datepicker.min.js': ['js/foundation-datepicker.js']
        }
      }
    },
    sass: {
      dist: {
        files: {
          'css/foundation-datepicker.css': 'css/foundation-datepicker.scss'
        }
      }
    },
    cssmin: {
      options: {
        shorthandCompacting: false,
        roundingPrecision: -1
      },
      target: {
        files: {
          'css/foundation-datepicker.min.css': ['css/foundation-datepicker.css']
        }
      }
    },
    watch: {
      javascript : {
        files : 'js/foundation-datepicker.js',
        tasks : ['uglify']
      },
      css: {
				files: 'css/foundation-datepicker.scss',
				tasks: ['compass']
			}
    }
  });
}
