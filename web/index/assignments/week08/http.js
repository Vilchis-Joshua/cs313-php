var http = require('http');

http.get(process.argv[2], function (response) {
    response.setEncoding('utf8');
    response.on('data', function (chunk) {
        console.log(chunk.split(/\r\n|\r|\n/));
    })
}).on('error', function (e) {
    console.log('Got error: ' + e.message);
})
