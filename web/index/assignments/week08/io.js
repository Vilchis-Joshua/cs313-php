var fs = require('fs');

var buffer = fs.readFileSync('test.txt');

var str = buffer.toString();


var results = str.split(/\r\n|\r|\n/).length;

console.log(results);