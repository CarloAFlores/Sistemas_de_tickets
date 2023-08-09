const firstCampo = document.getElementById("asunto1");
const motivo = document.getElementById("motivo1");
const usuarioResponsable = document.getElementById("userRespon");
const usuarioCorresponsable = document.getElementById("userCorres");
const button = document.getElementById("guardar1");
const etiqueta = document.getElementById("etiqueta1");


button.addEventListener('click',()=>{
	let contador = true
	if(etiqueta.value == ""){
		Swal.fire({
		  icon: 'error',
		  title: 'Oops...',
		  text: 'El campo etiqueta NO puede estar vacio'
		})
		contador = false;
		return false;
	}if(firstCampo.value.length == 0){
		Swal.fire({
		  icon: 'error',
		  title: 'Oops...',
		  text: 'El campo asunto NO puede estar vacio'
		})
		contador = false;
		return false;
	}if(motivo.value.length == 0){
		Swal.fire({
		  icon: 'error',
		  title: 'Oops...',
		  text: 'El campo motivo NO puede estar vacio'
		})
		contador = false;
		return false;
	}if(usuarioResponsable.value.length == 0){
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
	}
	else{
		//debugger;
			
			button.type = "submit";
	}
});

