/*primer modal*/
let cerrars = document.querySelectorAll(".close")[0];
let modals = document.querySelectorAll(".primermodal")[0];
let modalCs = document.querySelectorAll(".primermodal-container")[0];


 function statsArea(){

 	console.log('holis');

 	modalCs.style.opacity = "1";
	modalCs.style.visibility = "visible";
	modals.classList.toggle("modal-close");

 }

 cerrars.addEventListener("click",function(){
	modals.classList.toggle("modal-close");

	setTimeout(function(){
		modalCs.style.opacity = "0";
		modalCs.style.visibility = "hidden";
	},400);

});

const area = document.getElementById("selectarea");
const button = document.getElementById("botonmodal");
const fechai = document.getElementById("fechainicio");
const fechaf = document.getElementById("fechafinal");


button.addEventListener('click',()=>{
	let contador = true
	if(fechai.value == ""){
		Swal.fire({
		  icon: 'error',
		  title: 'Oops...',
		  text: 'El campo Fecha Inicio NO puede estar vacio'
		})
		contador = false;
		return false;
	}
	if(fechaf.value == ""){
		Swal.fire({
		  icon: 'error',
		  title: 'Oops...',
		  text: 'El campo Fecha Final NO puede estar vacio'
		})
		contador = false;
		return false;
	}
	if(area.value == ""){
		Swal.fire({
		  icon: 'error',
		  title: 'Oops...',
		  text: 'El campo Area NO puede estar vacio'
		})
		contador = false;
		return false;
	}
	else{
		//debugger;
			
			button.type = "submit";
	}

});
/*Se cierra*/


/*segundo modal*/
let cerrarsp = document.querySelectorAll(".closesgd")[0];
let modalsp = document.querySelectorAll(".sgdmodal")[0];
let modalCsp = document.querySelectorAll(".sgdmodal-container")[0];


 function statsPerson(){

 	console.log('holiwis');

 	modalCsp.style.opacity = "1";
	modalCsp.style.visibility = "visible";
	modalsp.classList.toggle("modal-closesgd");

 }

 cerrarsp.addEventListener("click",function(){
	modalsp.classList.toggle("modal-closesgd");

	setTimeout(function(){
		modalCsp.style.opacity = "0";
		modalCsp.style.visibility = "hidden";
	},400);

});


const nomina = document.getElementById("nomina");
const boton = document.getElementById("botonmodal1");
const fechaInicio = document.getElementById("fechainicio1");
const fechaFinal = document.getElementById("fechafinal1");


boton.addEventListener('click',()=>{
	let contador = true
	if(fechaInicio.value == ""){
		Swal.fire({
		  icon: 'error',
		  title: 'Oops...',
		  text: 'El campo Fecha Inicio NO puede estar vacio'
		})
		contador = false;
		return false;
	}
	if(fechaFinal.value == ""){
		Swal.fire({
		  icon: 'error',
		  title: 'Oops...',
		  text: 'El campo Fecha Final NO puede estar vacio'
		})
		contador = false;
		return false;
	}
	if(nomina.value.length == 0){
		Swal.fire({
		  icon: 'error',
		  title: 'Oops...',
		  text: 'El campo Nomina NO puede estar vacio'
		})
		contador = false;
		return false;
	}
	else{
		//debugger;
			
			boton.type = "submit";

			
	}

});
/*Se cierra*/



