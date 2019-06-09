var http = require('http'); 
var fs = require('fs'); 
var servidor; 
servidor = http.createServer(function (req, res) { 
fs.readFile('index.html', function(err, data) { 
res.writeHead(200, {'Content-Type': 'text/html'}); 
res.write(data); 
return res.end(); 
}); 
}); 
servidor.listen(8080);