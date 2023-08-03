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
let abrir = document.querySelectorAll(".cta")[0];
let modal = document.querySelectorAll(".primermodal")[0];
let modalC = document.querySelectorAll(".primermodal-container")[0];


//funcion del modal
abrir.addEventListener("click", function(e) {
	e.preventDefault();
	modalC.style.opacity = "1";
	modalC.style.visibility = "visible";
	modal.classList.toggle("modal-close");
});

cerrar.addEventListener("click",function(){
	modal.classList.toggle("modal-close");

	setTimeout(function(){
		modalC.style.opacity = "0";
		modalC.style.visibility = "hidden";
	},850)
})