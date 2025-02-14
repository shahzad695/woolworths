const defaultConfig = require("@wordpress/scripts/config/webpack.config");
const path = require("path");

module.exports = {
  ...defaultConfig, // Extend the default configuration

  entry: {
    // Define custom entry points
    main: "./assets/src/index.js", // Main JavaScript file
    // admin: './src/js/admin.js', // Admin-specific JavaScript
  },

  output: {
    ...defaultConfig.output, // Retain other default output settings
    path: path.resolve(__dirname, "assets/public"), // Custom output directory
    filename: "[name].js", // Custom output filename (based on entry keys)
  },
};
