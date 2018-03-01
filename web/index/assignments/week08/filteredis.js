var fs = require('fs');

var path = process.argv[2];

fs.readdir(path, function (err, content) {
    for (var i = 0; i < path.length; i++) {
        console.log(path[i]);
    }
})
