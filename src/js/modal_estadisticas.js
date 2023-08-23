
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

