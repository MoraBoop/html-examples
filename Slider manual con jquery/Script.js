//almacenar slider en una variable llamada slider
var slider = $('#slider');
//almacenar botones en las variable siguiente y anterior
var siguiente = $('#btn-next');
var anterior = $('#btn-prev');

//mover ultima imagen al primer lugar
//aca llamamos al div con id slider lo que hacemos es lo siguiente llamamos a slider seguido del section:last osea la ultima imagen que esta dentro del section y la insertamos antes del primero section osea section:first 
//en pocas palabras la ultima imagen esta al principio
$('#slider section:last').insertBefore('#slider section:first');

//mostrar la primera imagen con un margen de -100%
//No queremos ver la ultima imagen si no el primer section por eso le damos un -100% y ahora se muestra el primer section como primera imagen pero antes de esta, esta el ultimo atras de esta
slider.css('margin-left', '-'+100+'%');

/*Mover hacia la derecha*/
function moverD() {
	slider.animate({
		marginLeft:'-'+200+'%'
	} ,700, function(){
		$('#slider section:first').insertAfter('#slider section:last');
		slider.css('margin-left', '-'+100+'%');
	});
}

/*Mover hacia la izquierda*/
function moverI() {
	slider.animate({
		marginLeft:0
	} ,700, function(){
		$('#slider section:last').insertBefore('#slider section:first');
		slider.css('margin-left', '-'+100+'%');
	});
}

//La variable siguiente cuando haga click activara la funcion mover hacia la derecha
siguiente.on('click',function() {
	moverD();
});

//La variable anterior cuando haga click activara la funcion mover hacia la izquierda
anterior.on('click',function() {
	moverI();
});

/*Que se mueva automaticamente cada cinco segundos*/
function autoplay() {
	interval = setInterval(function(){
		moverD();
	}, 5000);
}
autoplay();