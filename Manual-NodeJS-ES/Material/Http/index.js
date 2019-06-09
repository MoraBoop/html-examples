var http = require('http'); 
var servidor; 
servidor = http.createServer(function(req, res){ 
res.writeHead(200, {'Content-Type' : 'text/html'}); 
res.write('\
<html>\
<body>\
<h1> Node JS </h1>\
<p> Mis primeros pasos con node js </p>\
</body>\
</html>'); 
res.end(); 
}); 
servidor.listen(8080);