var Encore = require('@symfony/webpack-encore');
var CopyWebPackPlugin = require('copy-webpack-plugin');

Encore
// the project directory where compiled assets will be stored
  .setOutputPath('public/build/')
  // the public path used by the web server to access the previous directory
  .setPublicPath('/build')
  .cleanupOutputBeforeBuild()
  .enableSourceMaps(!Encore.isProduction())
  .enableVersioning(Encore.isProduction())

  .addEntry('js/app', './assets/js/app.js')
  .addStyleEntry('css/app', './assets/css/app.scss')

  .enableSassLoader(function (sassOptions) {}, {
    resolveUrlLoader: false
  })

  .addPlugin(new CopyWebPackPlugin([
    {from: './assets/images', to: 'images'}
  ]))

  .autoProvidejQuery()
;

module.exports = Encore.getWebpackConfig();
