const express = require('express');
const http = require('http');
const path = require('path');
const url = require('url');
const app = express();


http.createServer(function proveAssignment(req, res) {
    res.writeHead(200, { 'Content-Type': 'text/plain' });
    res.end('Hello World!');
}).listen(8080);

//app.use(express.static('myapp'));
//app.use(express.static('public'));
app.get('/', function (req, res) {
    res.send('Hello World!');
})
//app.get('/math', (req, res) => res.send('Hello World!'));
//app.post('/math', function (req, res) {
//    res.send('Working?');
//})

app.listen(8080,
    () => console.log('Example app listening on port 8080!'));

//function proveAssignment(req, res) {

//}








//var express = require('express');
//var app = express();
//var http = require('http');
//var url = require('url');

//app.set('port', (process.env.PORT || 8080));
//app.use(express.static(__dirname + '/public'));
//app.set('views', __dirname + '/views');
//app.set('views engine', 'ejs');

//http.createServer(
//    function (req, res) {
//        res.writeHead(200, { 'Content-Type': 'text/plain' });
//    }
//).listen(8080);
