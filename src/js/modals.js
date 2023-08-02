let cerrar = document.querySelectorAll(".close")[0];
let abrir = document.querySelectorAll(".boton-li")[0];
let modal = document.querySelectorAll(".primermodal")[0];
let modalC = document.querySelectorAll(".primermodal-container")[0];

abrir.addEventListener("click", function(e) {
	e.preventDefault();
	modalC.style.opacity = '1';
	modalC.style.visibility = 'visible';
});