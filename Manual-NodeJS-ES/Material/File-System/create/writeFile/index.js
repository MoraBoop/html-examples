var fs = require('fs'); 
fs.writeFile('note.txt', 'Hola Mundo', function (err) { 
if (err) throw err; 
console.log('Archivo creado'); 
});