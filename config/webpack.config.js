/**
 * Created by Stanton on 02/04/2017.
 */

require("webpack");
const path = require('path');
const ExtractTextPlugin = require("extract-text-webpack-plugin");

const extractSass = new ExtractTextPlugin({
    filename: "style.css",
    // disable: process.env.NODE_ENV === "development"
});

module.exports = {

    context: __dirname,
    entry: '../src/scss/app.scss',
    mode: 'development',
    output: {
        filename: 'style.css',
        path: path.resolve(__dirname, '../theme')
    },

    devtool: "source-map",
    module: {
        rules: [ // Array of different rules
            {
                // Each test is a pattern to match, to apply this rule
                test: /\.woff2?(\?v=[0-9]\.[0-9]\.[0-9])?$/,
                // The use field specifies one or more 'loaders'
                // that can turn the filetype into a webpack module
                use: {
                    loader: "url-loader",
                    options: {
                        limit: 12000, // if file is less than 12000 emit asset as base64 string
                        name(file) {
                            console.log('outputting file >>>> ', file);
                            return '/assets/[name]_[hash].[ext]';
                        }
                    }
                }
            },
            {
                test: /\.(ttf|eot|svg)(\?v=[0-9]\.[0-9]\.[0-9])?$/,
                use:{
                    loader : "file-loader",
                    options :{
                        name(file){
                            console.log('outputting file >>>> ', file);
                            return '/assets/[name]_[hash].[ext]';
                        }
                    }
                }
            },
            {
                test: /\.scss$/,
                use: extractSass.extract({
                    // fallback: "style-loader",
                    use: ["css-loader", "sass-loader"]
                }),
            }
        ]
    },

    stats: 'normal', //Can supply an object here for advanced configuration
    devServer: {},
    plugins: [extractSass],
    // Watch all the files and retranspile if there are changes
    watch: true
};
