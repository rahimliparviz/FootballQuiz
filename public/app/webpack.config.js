const path = require("path");
const HtmlWebpackPlugin = require("html-webpack-plugin");
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const webpack = require('webpack');


let conf = {
    entry: {
        index: "./src/index.js",
        login: "./src/login.js",
        password:"./src/password.js",
        newpassword:"./src/newpassword.js",
        signup:"./src/signup.js",
        test: "./src/test.js",
        share:"./src/share.js",
        main:"./src/main.js",
        signin:"./src/signin.js",
        map:"./src/map.js",
        'babel-polyfill': ['babel-polyfill'], //that allowing us to use in js generators and async await 

    },
    output: {
        path: path.resolve(__dirname, "./dist"),
        filename: "[name]bundle.js",
        publicPath: "dist/"
    },
    devServer: {
        overlay:true
    },
    module: {
        rules: [
            {
                test: /\.js/,
                loader:"babel-loader",
                //exclude: "/node_modules/"
            },
            {
                test:/\.scss$/,
                use: ExtractTextPlugin.extract({
                    fallback: "style-loader",
                    use: [
                        {
                            loader: 'css-loader',
                            options: {
                                // If you are having trouble with urls not resolving add this setting.
                                // See https://github.com/webpack-contrib/css-loader#url
                                url: false,
                                minimize: true,
                                sourceMap: true
                            }
                        }, 
                        {
                            loader: 'sass-loader',
                            options: {
                                sourceMap: true
                            }
                        }
                      ]
                })
            }
        ]
    },
    plugins: [
        new ExtractTextPlugin({
            filename: "[name].css"
        }),

        new HtmlWebpackPlugin({
            filename: "index.html",
            template: "build/index.html",
            hash: true,
            chunks: ["index"]
        }),

        new webpack.ProvidePlugin({
            '$': "jquery",
            'jQuery': "jquery",
            'window.jQuery': 'jquery',
            'Popper': 'popper.js',
            "Bootstrap": "bootstrap.js"
        })
    ]
};

module.exports = (env, options) => {

    let production = options.mode === "production";

    conf.devtool = production ? false : "eval-sourcemap";

    return conf;
} 

['index',"login","password","signup","test",
         "share","main","newpassword","signin","map"].forEach((file) => {
    conf.plugins.push(
        new HtmlWebpackPlugin({
            filename: `${file}.html`,
            template: `build/${file}.html`,
            chunks: [file.replace(/-(\w)/g, (match, c) => c.toUpperCase())]
        })
    );
})