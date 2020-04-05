const express = require('express');
const mysql = require('mysql');

var PORT = process.env.PORT || 3000;

//creat connection
const db = mysql.createConnection({
    host     : 'us-cdbr-iron-east-01.cleardb.net',
    user     : 'b378350c554eb4',
    password : '9f137451',
    database : 'heroku_277f5aee5998edf'
});

//connect 
db.connect((err) => {
    if(err){
        throw err;
    }
    console.log('Mysql Connected...');
});

const app = express();

app.listen(PORT, () => 
{
    console.log('Server started on port 3000');
});
