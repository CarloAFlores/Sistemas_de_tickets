const firstCampo = document.getElementById("asunto1");
const motivo = document.getElementById("motivo1");
const usuarioResponsable = document.getElementById("userRespon");
const usuarioCorresponsable = document.getElementById("userCorres");
const button = document.getElementById("guardar1");
const etiqueta = document.getElementById("etiqueta1");
const borrar = document.getElementById("Seraeliminado");


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


function mostrarEliminacion(id){
	Swal.fire({
	  title: 'Estas seguro de eliminarlo?',
	  text: "No podrás volver a ver el ticket",
	  icon: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Sí, borralo!'
	}).then((result) => {
	  if (result.isConfirmed) {
	  	console.log(id)
	    Swal.fire(
	      'Eliminado!',
	      'El ticket a sido eliminado correctamente.',
	      'success'
	    )
	  }
	})	
}


