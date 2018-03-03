var http = require('http');
var url = require('url');

http.createServer(onRequest).listen(8080);

//http.createServer(function onRequest(request, response) {
//    var q = url.parse(request.url, true);
//    var filename = '.' + q.pathname;
//    response.write('filename' + filename);
//    if (q.pathname === '/home') {
//        response.writeHead(200, { 'Content-Type': 'text/html' });
//        response.write('<h1>Welcome to the Home Page</h1>');
//    } else if (q.pathname === '/getData') {
//        response.writeHead(200, { 'Content-Type': 'text/html' });
//        var d = { "name": "Joshua Vilchis", "class": "cs313" };
//        var json = JSON.stringify(d);
//        response.write(json);
//    } else {
//        response.writeHead(404, { "Content-Type": "text/html" });
//    }
//    response.end();
////        //if (err) {
////        //    res.writeHead(404, { 'Content-Type': 'text/html' });
////        //    return response.end('404 Page Not found');
////        //}
////        //if (filename === '/home') {
////        //    return '<h1>Welcome to the Home Page</h1>';
////        //} else if (filename === '/getData') {
////        //    return { "name": "Joshua Vilchis", "class": "cs313" };
////        //}
////        //response.writeHead(200, { 'Content-Type': 'text/html' });
////        //console.log(data.toString());
//}).listen(8080);


function onRequest(request, response) {
    var q = url.parse(request.url, true);
    var filename = '.' + q.pathname;
    if (q.pathname === '/home') {
        response.writeHead(200, { 'Content-Type': 'text/html' });
        response.write('<h1>Welcome to the Home Page</h1>');
    } else if (q.pathname=== '/getData') {
        response.writeHead(200, { 'Content-Type': 'text/html' });
        var d = { "name": "Joshua Vilchis", "class": "cs313" };
        var json = JSON.stringify(d);
        response.write(json);
    } else {
        response.writeHead(404, { "Content-Type": "text/html" });
    }
    response.end();
}