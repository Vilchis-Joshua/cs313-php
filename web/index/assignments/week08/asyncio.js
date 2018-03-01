var fs = require('fs');
var count = 0;

function countNewLines(callback) {
    fs.readFile(process.argv[2], function doneReading(err, fileContents) {
        count = fileContents.toString().split('\n').length;
        //console.log("file: " + fileContents);
        callback();
    })
}

function display() {
    console.log(count - 1);
}
countNewLines(display);