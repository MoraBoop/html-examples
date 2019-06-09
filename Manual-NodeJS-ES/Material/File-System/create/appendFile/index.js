var fs = require('fs'); 
fs.appendFile('note.txt', 'Hola Mundo!', function (err) { 
if (err) throw err; 
console.log('Archivo sobre escrito'); 
});