/*
 * grunt-imageoptim
 * https://github.com/JamieMason/grunt-imageoptim
 *
 * Copyright (c) 2013 Jamie Mason @fold_left
 * Licensed under the MIT license.
 */

module.exports = function(grunt) {

  'use strict';
  var mozjpeg = require('imagemin-mozjpeg');

  grunt.initConfig({
  	kg: grunt.file.readJSON("package.json"),

    imageoptim: {
  	  myTask: {
  	    options: {
  	      jpegMini: false,
  	      imageAlpha: true,
  	      quitAfter: true
  	    },
  	    src: ['img/project/recent']
  	  }
  	},

    uglify: {
      options: {
        mangle: true
      },
      build: {
        src: "js/*.js",
        dest: "js/min/script.js"
      }
    },
    cssmin: {
	  combine: {
	    files: {
	      'css/newCss.css': ['assets/css/default.css', 'assets/css/style.css']
	    }
	  }
	},
  imagemin: {                          // Task
    static: {                          // Target
      options: {                       // Target options
        optimizationLevel: 3,
        use: [mozjpeg()]
      },
    },
    dynamic: {                         // Another target
      files: [{
        expand: true,                  // Enable dynamic expansion
        cwd: 'img/project',                   // Src matches are relative to this path
        src: ['**/*.{png,jpg,gif}'],   // Actual patterns to match
        dest: 'img/minified'                  // Destination path prefixs
      }]
    }
  },
  watch: {
    css: {
      files: '**/*.scss',
      tasks: ['sass'],
      options: {
        livereload: true,
      },
    },
  },
  sass: {                              // Task
    dist: {                            // Target
      options: {                       // Target options
        style: 'expanded'
      },
      files: {                         // Dictionary of files
        'style/css/style.css': 'style/sass/style.scss'       // 'destination': 'source'
      }
    }
  }

  });
  grunt.loadNpmTasks("grunt-contrib-cssmin");
  grunt.loadNpmTasks("grunt-contrib-uglify");
  grunt.loadNpmTasks("grunt-contrib-imagemin");
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.registerTask('default', ["uglify", "imagemin", "cssmin"]);
  
};