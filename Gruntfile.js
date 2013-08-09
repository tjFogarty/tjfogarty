// http://gruntjs.com/configuring-tasks#building-the-files-object-dynamically
module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    concat: {
      options: {
        // define a string to put between each file in the concatenated output
        separator: ';'
      },
      dist: {
        // the files to concatenate
        src: ['js/libs/*.js', 'js/plugins/*.js', 'js/main.js'],
        // the location of the resulting JS file
        dest: 'js/all.min.js'
      }
    },

    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      dist: {
        files: {
          'js/all.min.js': ['js/all.min.js']
        }
      }
    },

    imagemin: {
      png: {
        options: {
          optimizationLevel: 7
        },
        files: [
          {
            // Set to true to enable the following options…
            expand: true,
            // cwd is 'current working directory'
            cwd: 'images/',
            src: ['*.png'],
            // Could also match cwd line above. i.e. project-directory/img/
            dest: 'images/',
            ext: '.png'
          }
        ]
      },
      jpg: {
        options: {
          progressive: true
        },
        files: [
          {
            // Set to true to enable the following options…
            expand: true,
            // cwd is 'current working directory'
            cwd: 'images/',
            src: ['*.jpg'],
            // Could also match cwd. i.e. project-directory/img/
            dest: 'images/',
            ext: '.jpg'
          }
        ]
      }
    }

  });

  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-imagemin');

  grunt.registerTask('imagemin', ['imagemin']);
  grunt.registerTask('compressjs', ['concat', 'uglify']);
  grunt.registerTask('default', ['concat', 'uglify', 'imagemin']);
};