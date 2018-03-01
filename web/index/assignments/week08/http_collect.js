var fs = require('fs');
var http = require('http');
var bl = require('bl');
var concat = require('concat-stream');


http.get(process.argv[2], function (response) {
    response.setEncoding('utf8');
    response.pipe(concat(function (err, data) {
        if (err) {
            return console.error(err);
        }
        console.log(data.toString().length)
        console.log(data.toString());
    }))
}).on('error', function (e) {
    console.log('Got error: ' + e.message);
})

