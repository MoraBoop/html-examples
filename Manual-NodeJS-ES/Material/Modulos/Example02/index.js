var http = require('http'); 
var dt = require('./fecha'); 
var servidor = http.createServer(function (req, res) { 
res.writeHead(200, {'Content-Type': 'text/html'}); 
res.write("The date and time are currently: " + dt.myDateTime()); 
res.end(); 
}); 
servidor.listen(8080); 
console.log('Servidor web iniciado');