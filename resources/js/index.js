const req = require.context("./components/main", true, /_[^_].*\.(js)$/);
req.keys().forEach(key => req(key));
