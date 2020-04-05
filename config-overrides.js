const path = require('path');

module.exports = {
    // Overriding sources folder from 'src/' to 'app/'.
    paths: function (paths, env) {
        paths.appIndexJs = path.resolve(__dirname, 'app/index.js');
        paths.appSrc = path.resolve(__dirname, 'app');
        return paths;
    },
}
