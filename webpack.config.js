const path = require('path');

module.exports = {
  mode: 'development',
  devTool: 'source-map',
  entry: './src/js/index.js',
  output: {
    filename: 'main.js',
    path: path.resolve(__dirname, 'dist'),
  },
};