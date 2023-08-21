var tbrow = document.querySelectorAll(".tbrow");

//Iterate
for(var x = 0;x< tbrow.length;x++){
	tbrow[x].addEventListener("mouseover", function(){
		var z = document.querySelectorAll(".active");
		if(z.length > 0){
			document.querySelector(".active").classList.remove("active");

		}
		this.classList.add("active");
	});
	tbrow[x].addEventListener("mouseout", function(){
		document.querySelector(".active").classList.remove("active");
	});
}


let cerrar = document.querySelectorAll(".close")[0];

let modal = document.querySelectorAll(".primermodal")[0];
let modalC = document.querySelectorAll(".primermodal-container")[0];


//funcion del modal1
cerrar.addEventListener("click",function(){
	modal.classList.toggle("modal-close");

	setTimeout(function(){
		modalC.style.opacity = "0";
		modalC.style.visibility = "hidden";
	},400)
})

function hola(id){
	modalC.style.opacity = "1";
	modalC.style.visibility = "visible";
	modal.classList.toggle("modal-close");

	console.log(id)
}


//funcion del modal2

let cerrar2 = document.querySelectorAll(".close2")[0];
let modal2 = document.querySelectorAll(".segundomodal")[0];
let modalC2 = document.querySelectorAll(".segundomodal-container")[0];



cerrar2.addEventListener("click",function(){
	modal2.classList.toggle("modal-close2");

	setTimeout(function(){
		modalC2.style.opacity = "0";
		modalC2.style.visibility = "hidden";
	},400)
})

function hola2(id){

	modalC2.style.opacity = "1";
	modalC2.style.visibility = "visible";
	modal2.classList.toggle("modal-close2");

	console.log(id)
}

//funcion del modal3

let cerrar3 = document.querySelectorAll(".close3")[0];
let modal3 = document.querySelectorAll(".tercermodal")[0];
let modalC3 = document.querySelectorAll(".tercermodal-container")[0];


cerrar3.addEventListener("click",function(){
	modal3.classList.toggle("modal-close3");

	setTimeout(function(){
		modalC3.style.opacity = "0";
		modalC3.style.visibility = "hidden";
	},400)
})

function hola3(id){

	modalC3.style.opacity = "1";
	modalC3.style.visibility = "visible";
	modal3.classList.toggle("modal-close3");

	console.log(id)
}

//funcion del modal4(borrar)

let cerrar4 = document.querySelectorAll(".close4")[0];
let modal4 = document.querySelectorAll(".cuartomodal")[0];
let modalC4 = document.querySelectorAll(".cuartomodal-container")[0];

let id_ticket = document.querySelector("#id_ticket");

cerrar4.addEventListener("click",function(){
	modal4.classList.toggle("modal-close4");

	setTimeout(function(){
		modalC4.style.opacity = "0";
		modalC4.style.visibility = "hidden";
	},400)
})

function hola4(id){

	modalC4.style.opacity = "1";
	modalC4.style.visibility = "visible";
	modal4.classList.toggle("modal-close4");

	id_ticket.value = id;

	console.log(id)
}


function aceptar4(id){

	let id_ticket = document.querySelector("#id_ticket");
	const idx = id_ticket.value;
	
	var datos = { id: idx};

	var payload = {
	    a: idx,
	    b: 2
	};

	var data = new FormData();
	data.append( "json", JSON.stringify( payload ) );

	fetch('eliminar', {
		method: 'POST',
		body: JSON.stringify(payload),
		headers: {
		  'Content-Type': 'application/json'// AQUI indicamos el formato
		}
	})
	.then((response) => response.json())
	.then(result =>{
		console.log(result);

	})

	.catch(error => {
		console.log('Error al realizar la soplicitud:', error);
	});
}

/*funcion del modal5(vermás)

let cerrar5 = document.querySelectorAll(".close5")[0];
let modal5 = document.querySelectorAll(".quintomodal")[0];
let modalC5 = document.querySelectorAll(".quintomodal-container")[0];


cerrar5.addEventListener("click",function(){
	modal5.classList.toggle("modal-close5");

	setTimeout(function(){
		modalC5.style.opacity = "0";
		modalC5.style.visibility = "hidden";
	},400)
})

function hola5(id){

	modalC5.style.opacity = "1";
	modalC5.style.visibility = "visible";
	modal5.classList.toggle("modal-close5");

	console.log(id)
}
*/

/*FUNCION PARA EL BUSCADOR MOVIL*/
 function obtener(){

 	console.log('hola');

 	let ver = document.getElementById("ocultar-y-mostrar");
 	if (ver.style.display === "none") {
 	    ver.style.display = "flex";
 	} else {
 	    ver.style.display = "none";
 	}

 }