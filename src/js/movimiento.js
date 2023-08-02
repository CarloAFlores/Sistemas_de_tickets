

function  pulsar(mostrar){
	let parte1 = document.getElementById("parte1");
	let parte2 = document.getElementById("parte2");
	let parte3 = document.getElementById("parte3");

	if(mostrar == 1){
		parte1.style.display = "none";
		parte2.style.display = "block";
		parte3.style.display = "none";

	}if(mostrar ==2){
		parte1.style.display = "none";
		parte2.style.display = "none";
		parte3.style.display = "block";
	}else {
		console.log('Error x_x')
	}
}

function volver(regresar){
	let parte1 = document.getElementById("parte1");
	let parte2 = document.getElementById("parte2");
	let parte3 = document.getElementById("parte3");

	if(regresar == 1 ){
		parte1.style.display = "block";
		parte2.style.display = "none";
		parte3.style.display = "none";
	}if(regresar == 2){
		parte1.style.display = "none";
		parte2.style.display = "block";
		parte3.style.display = "none";
	}
}

/*
function volver(){
	let a = document.getElementById("parte1");
	a.style.display = "block";
	let b = document.getElementById("parte2");
	b.style.display = "block";
}*/