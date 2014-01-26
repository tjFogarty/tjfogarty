  // http://gruntjs.com/configuring-tasks#building-the-files-object-dynamically
module.exports = function(grunt) {

  /**
   * Saves having to declare each dependency
   */
  require( "matchdep" ).filterDev( "grunt-*" ).forEach( grunt.loadNpmTasks );

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    uglify: {
      options: {
        compress: true,
        mangle: true,
        report: 'min',
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      
      build: {
        files: {
          "js/all.min.js": ["js/libs/jquery-2.1.0.js", "js/plugins/*.js", "js/main.js"]
        }
      }
    },

    sass: {
      build: {
        files: {
          'css/global.min.css': 'css/global.scss'
        },
        options: {
          style: 'expanded'
        }
      }
    },

    watch: {
      scripts: {
        files: ['js/**/*.js', 'js/main.js'],
        tasks: ['uglify'],
        options: {
          spawn: false
        }
      },

      css: {
        files: ['css/**/*.scss'],
        tasks: ['sass']
      },

      styles: {
        files: ['css/global.min.css'],
        tasks: ['autoprefixer', 'cssmin'],
        options: {
          spawn: false
        }
      }
    },

    cssmin: {
      minify: {
        expand: true,
        cwd: 'css/',
        src: ['global.min.css'],
        dest: 'css/',
        ext: '.min.css'
      }
    },

    autoprefixer: {
      dist: {
        files: {
          'css/global.min.css': 'css/global.min.css'
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

};