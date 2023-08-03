 
function  pulsar(mostrar){
	let parte1 = document.getElementById("parte1");
	let parte2 = document.getElementById("parte2");
	let parte3 = document.getElementById("parte3");
	
	let circulo = document.getElementById('num1');
	let circulo2 = document.getElementById('num2');
	let circulo3 = document.getElementById('num3');

	if(mostrar == 1){
		parte1.style.display = "none";
		parte2.style.display = "block";
		parte3.style.display = "none";
		circulo.style.background = 'none';
		circulo2.style.background = "radial-gradient(circle, rgba(148,187,233,1) 0%, rgba(0,70,230,1) 100%)";
		circulo3.style.background = 'none';
		

	}if(mostrar ==2){
		parte1.style.display = "none";
		parte2.style.display = "none";
		parte3.style.display = "block";
		circulo.style.background = 'none';
		circulo2.style.background = 'none';
		circulo3.style.background = "radial-gradient(circle, rgba(148,187,233,1) 0%, rgba(0,70,230,1) 100%)";
	}else {
		console.log('hola')
	}
}

function volver(regresar){
	let parte1 = document.getElementById("parte1");
	let parte2 = document.getElementById("parte2");
	let parte3 = document.getElementById("parte3");

	let circulo = document.getElementById('num1');
	let circulo2 = document.getElementById('num2');
	let circulo3 = document.getElementById('num3');

	if(regresar == 1 ){
		parte1.style.display = "block";
		parte2.style.display = "none";
		parte3.style.display = "none";

		circulo.style.background = "radial-gradient(circle, rgba(148,187,233,1) 0%, rgba(0,70,230,1) 100%)";
		circulo2.style.background = "none";
		circulo3.style.background = "none";

	}if(regresar == 2){
		parte1.style.display = "none";
		parte2.style.display = "block";
		parte3.style.display = "none";

		circulo.style.background = "none";
		circulo2.style.background = "radial-gradient(circle, rgba(148,187,233,1) 0%, rgba(0,70,230,1) 100%)";
		circulo3.style.background = 'none';
	}
}

/*
function volver(){
	let a = document.getElementById("parte1");
	a.style.display = "block";
	let b = document.getElementById("parte2");
	b.style.display = "block";
}*/

