 
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



//--------------------------------------------------------------------------------------
//Usuario Responsable

const inputUsuarioResp = document.getElementById('userRespon');
const nombreList = document.getElementById("nombreList");

// Función para manejar el evento de teclado
function manejarTeclado(event) {
    // Obtener el valor actual del campo de entrada de texto
    const textoIngresado = inputUsuarioResp.value;
    
    // Aquí puedes agregar tu lógica personalizada
    console.log(`Texto ingresado: ${textoIngresado}`);

    id_usuariores.value = textoIngresado;

    let nom = id_usuariores.value;

    return nom;
}

// Agregar un escuchador de eventos al campo de entrada de texto
inputUsuarioResp.addEventListener('keyup', manejarTeclado);



function miFuncion(event) {

	
    const palabra = inputUsuarioResp.value;
    console.log(palabra);

    // Enviar la solicitud si la palabra tiene al menos una letra
    if (palabra.length > 0) {
        fetch('mirar', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: 'nombre=' + encodeURIComponent(palabra)
        })
        .then((response) => response.json())
        .then(result => {
            console.log(result);

            // Obtener el contenedor donde se muestran los usuarios

            const nombreList = document.querySelector("#nombreList");


            // Limpiar y ocultar la lista desplegable
            nombreList.innerHTML = '';
            nombreList.style.display = 'none';

            // Crear una opción para cada usuario en la lista desplegable
            result.forEach(usuario => {
                const option = document.createElement('option');
                option.dataset.id = usuario.identificador; // Agrega el identificador como atributo de datos
                option.value = usuario.nombre;
                option.textContent = usuario.nombre;
                nombreList.appendChild(option);
            });

            // Mostrar la lista desplegable
            nombreList.style.display = 'block';
        })
        .catch(error => {
            console.log('Error al realizar la solicitud:', error);
        });
    }
}

// Manejar la selección de un nombre de la lista desplegable
nombreList.addEventListener('click', function () {
    const selectedOption = nombreList.querySelector('option:checked');
    if (selectedOption) {
        inputUsuarioResp.value = selectedOption.textContent;
        id_usuariores.value = selectedOption.dataset.id; // Asigna el identificador al campo oculto
        nombreList.style.display = 'none';
    }
});


inputUsuarioResp.addEventListener('keyup', miFuncion);


//--------------------------------------------------------------------------------------
//Usuario Corresponsable

const inputUsuarioCorresp = document.getElementById('userCorres');
const nombreList2 = document.getElementById("nombreList2");

// Función para manejar el evento de teclado
function manejarTeclado2(event) {
    // Obtener el valor actual del campo de entrada de texto
    const textoIngresado2 = inputUsuarioCorresp.value;
    
    // Aquí puedes agregar tu lógica personalizada
    console.log(`El texto ingresado: ${textoIngresado2}`);

    id_usuariocor.value = textoIngresado2;

    let nom = id_usuariocor.value;

    return nom;
}

// Agregar un escuchador de eventos al campo de entrada de texto
inputUsuarioCorresp.addEventListener('keyup', manejarTeclado2);


function miFuncion2(event) {

    
    const palabra2 = inputUsuarioCorresp.value;
    console.log(palabra2);

    // Enviar la solicitud si la palabra tiene al menos una letra
    if (palabra2.length > 0) {
        fetch('mirar', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: 'nombre=' + encodeURIComponent(palabra2)
        })
        .then((response) => response.json())
        .then(result => {
            console.log(result);

            // Obtener el contenedor donde se muestran los usuarios

            const nombreList2 = document.querySelector("#nombreList2");


            // Limpiar y ocultar la lista desplegable
            nombreList2.innerHTML = '';
            nombreList2.style.display = 'none';

            // Crear una opción para cada usuario en la lista desplegable
            result.forEach(usuario => {
                const option2 = document.createElement('option');
                option2.dataset.id = usuario.identificador; // Agrega el identificador como atributo de datos
                option2.value = usuario.nombre;
                option2.textContent = usuario.nombre;
                nombreList2.appendChild(option2);
            });

            // Mostrar la lista desplegable
            nombreList2.style.display = 'block';
        })
        .catch(error => {
            console.log('Error al realizar la solicitud:', error);
        });
    }
}
// Manejar la selección de un nombre de la lista desplegable
nombreList2.addEventListener('click', function () {
    const selectedOption2 = nombreList2.querySelector('option:checked');
    if (selectedOption2) {
        inputUsuarioCorresp.value = selectedOption2.textContent;
        id_usuariocor.value = selectedOption2.dataset.id; // Asigna el identificador al campo oculto
        nombreList2.style.display = 'none';

        /* Actualiza el valor del campo oculto id_todosUserCorrespon
        const usuariosCorresponsables = [selectedOption2.dataset.id];
        document.getElementById('id_todosUserCorrespon').value = usuariosCorresponsables.join(',');*/
    }
    
});



inputUsuarioCorresp.addEventListener('keyup', miFuncion2);

