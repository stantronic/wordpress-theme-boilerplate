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
    entry: './src/scss/app.scss',
    mode:'development',
    output: {
        filename: 'style.css',
        path: path.resolve(__dirname, './wordpress-themes/wintonish_2018')
    },

    devtool: "source-map",
    module: {
        rules: [ // Array of different rules
            {
                test: /\.woff2?(\?v=[0-9]\.[0-9]\.[0-9])?$/,
                use: "url-loader?limit=10000"
            },
            {
                test: /\.(ttf|eot|svg)(\?v=[0-9]\.[0-9]\.[0-9])?$/,
                use: "file-loader"
            },
            {
                test: /\.scss$/, // pattern to match to apply this rule
                use: extractSass.extract({
                    // fallback: "style-loader",
                    use: ["css-loader", "sass-loader"]
                }),
            }
        ]
    },
    // loaders: '',
    // plugins: '',
    //target: 'web',
    stats: 'normal', //Can supply an object here for advanced configuration
    devServer: {},
    plugins: [extractSass],
    watch: true
};
