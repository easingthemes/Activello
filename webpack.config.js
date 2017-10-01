'use strict';

const { resolve, join } = require('path'),
    webpack = require('webpack');

module.exports = {
    context: resolve(__dirname, 'src'),
    entry: {
        theme: ['./js/index.js'],
        plugins: ['./js/plugins.js'],
        home: ['./js/home.js']
    },
    output: {
      path: join(__dirname, 'assets'),
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
