const req = require.context("./components/admin", true, /_[^_].*\.(js)$/);
req.keys().forEach(key => req(key));
