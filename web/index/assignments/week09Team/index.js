var express = require('express');
var app = express();
var url = require('url');

app.set('port', (process.env.PORT || 8080));
app.use(express.static(__dirname + '/public'));
app.set('views', __dirname + '/views');
app.set('view engine', 'ejs');

app.get('/math', (req, res) => {
    performOperation(req, res);
}
);


function performOperation(req, res) {
    var path = url.parse(req.url, true);

    var op = path.query.operation;
    op = op.toLowerCase();
    var opOne = Number(path.query.firstOperand);
    var opTwo = Number(path.query.secondOperand);
    var result = 0;

    console.log(op);
    if (op === 'add') {
        //console.log(opOne + opTwo);
        result = opOne + opTwo;
    } else if (op === 'subtract') {
        //console.log(opOne - opTwo);
        result = opOne - opTwo;
    } else if (op === 'multiply') {
        //console.log(opOne * opTwo);
        result = opOne * opTwo;
    } else {
        //console.log(opOne / opTwo);
        result = opOne / opTwo;
    }

    var d = { operation: op, left: opOne, right: opTwo, result: result };
    res.render('pages/results', d);
}

app.listen(app.get('port'), () => console.log('listening to: ' + app.get('port')));