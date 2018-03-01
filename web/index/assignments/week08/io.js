var fs = require('fs');

var buffer = fs.readFileSync(process.argv[2]);
var str = buffer.toString();
//var results = str.split(/\r\n|\r|\n/).length;
var results = str.split('\n').length;

console.log((results - 1));
