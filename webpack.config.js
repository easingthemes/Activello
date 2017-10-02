'use strict';

const { resolve, join } = require('path'),
  globEntries = require('webpack-glob-entries'),
  webpack = require('webpack');

const src = resolve(__dirname, 'src'),
  assets = join(__dirname, 'assets'),
  entries = 'entry/**/*.js',
  entry = join(src, entries);

module.exports = {
  context: src,
  entry: globEntries(entry),
  output: {
    path: assets,
    filename: 'js/[name].bundle.js',
  },
  resolve: {
    extensions: ['.js']
  },
  plugins: [
    new webpack.NamedModulesPlugin()
  ],
  module: {
    rules: [{
      test: /\.js?$/,
      use: 'babel-loader',
      exclude: /node_modules/
    }]
  },
  devtool: "#source-map"
};
