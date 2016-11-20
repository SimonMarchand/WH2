
var elixir = require('laravel-elixir');
var minimist = require('minimist');
var options = minimist(process.argv.slice(2));

var vendorPath = 'vendor/bower_components/';

elixir(function(mix) {
    // SASS
    if (options.t == "sass" || ! options.t) {
        mix.sass('master.scss');
    }
    // JS
    if (options.t == "js" || ! options.t) {
      mix.scripts([
            
        ], 'public/js/master.js');
    }
    if ( ! options.t) {
    }
    // versionning
    mix.version(
      [
        'css/master.css',
        'js/master.js'
      ]
    );
    // auto-reload
    mix.browserSync({
      proxy: 'wh2.dev'
    });
});
