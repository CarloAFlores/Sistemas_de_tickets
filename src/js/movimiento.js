 
function  pulsar(mostrar){
	let parte1 = document.getElementById("parte1");
	let parte2 = document.getElementById("parte2");
	let parte3 = document.getElementById("parte3");
	
	let circulo = document.getElementById('num1');
	let circulo2 = document.getElementById('num2');
	let circulo3 = document.getElementById('num3');

	const etiquetas = document.getElementById("etiqueta");
	const asunto = document.getElementById("asunto");
	const motivo = document.getElementById("motivo");
	const usuarioResponsable = document.getElementById("usuario_r");
	const usuarioCorresponsable = document.getElementById("user_corres");


	if(mostrar == 1){
		let contador = true
		if(etiquetas.value == ""){
			Swal.fire({
					icon: 'error',
					title: 'Oops...',
					text: 'El campo etiqueta NO puede estar vacio'
				})
			contador = false;
			return false;
		}if(asunto.value.length == 0){
			Swal.fire({
					icon: 'error',
					title: 'Oops...',
					text: 'El campo asunto NO puede estar vacio'
				})
			contador = false;
			return false;
		}
		if(motivo.value.length == 0){
			Swal.fire({
					icon: 'error',
					title: 'Oops...',
					text: 'El campo motivo NO puede estar vacio'
				})
			contador = false;
			return false;
		}
		parte1.style.display = "none";
		parte2.style.display = "block";
		parte3.style.display = "none";
		circulo.style.background = 'none';
		circulo2.style.background = "radial-gradient(circle, rgba(148,187,233,1) 0%, rgba(0,70,230,1) 100%)";
		circulo3.style.background = 'none';


		

	}if(mostrar ==2){
		let contador = true
		if(usuarioResponsable.value.length == 0){
			Swal.fire({
					icon: 'error',
					title: 'Oops...',
					text: 'El campo Usuario Responsable NO puede estar vacio'
				})
			contador = false;
			return false;
		}if(usuarioCorresponsable.value.length == 0){
			Swal.fire({
					icon: 'error',
					title: 'Oops...',
					text: 'El campo Usuario Corresponsable NO puede estar vacio'
				})
			contador = false;
			return false;
		}else{
		//debugger;
			
			button.type = "submit";
	}

		parte1.style.display = "none";
		parte2.style.display = "none";
		parte3.style.display = "block";
		circulo.style.background = 'none';
		circulo2.style.background = 'none';
		circulo3.style.background = "radial-gradient(circle, rgba(148,187,233,1) 0%, rgba(0,70,230,1) 100%)";
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



