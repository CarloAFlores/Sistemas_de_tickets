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
	},850)
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
	},850)
})

function hola2(id){

	modalC2.style.opacity = "1";
	modalC2.style.visibility = "visible";
	modal2.classList.toggle("modal-close2");

	console.log(id)
}