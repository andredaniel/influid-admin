const webpack = require('webpack')

module.exports = function (env) {
  return {
    entry: "./assets/js/influid-admin.js",
    output: {
      path: __dirname + "/dist",
      filename: "bundle.js"
    },
    module: {
      loaders: [
        {test: /\.html$/, loader: 'raw-loader', exclude: /node_modules/},
        {test: /\.css$/, loader: "style-loader!css-loader", exclude: /node_modules/},
        {test: /\.scss$/, loader: "style-loader!css-loader!sass-loader", exclude: /node_modules/},
        {test: /\.woff($|\?)|\.woff2($|\?)|\.ttf($|\?)|\.eot($|\?)|\.svg($|\?)/, loader: 'url-loader'}
      ]
    },
    plugins: []
  }
}
