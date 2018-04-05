//importando o modulo express
var app = require('express')();


//importando o modulo http
var http = require('http').createServer(app);

//importando o modulo mysql
var mysql = require('mysql');

//modulo para pegar dados via post
var bodyParser = require('body-parser');
app.use(bodyParser.urlencoded({extend: true}))

//importando lib de criptografia
var mysql = require('mysql');

//variavel de conexao
var mysql = require('mysql');
