const firstCampo = document.getElementById("asunto1");
const motivo = document.getElementById("motivo1");
const usuarioResponsable = document.getElementById("userRespon");
const usuarioCorresponsable = document.getElementById("userCorres");
const button = document.getElementById("guardar1");
const etiqueta = document.getElementById("etiqueta1");
const borrar = document.getElementById("Seraeliminado");
let formulario = document.querySelector('form');


button.addEventListener('click', (e) => {
        e.preventDefault();
    let contador = true;
    if (etiqueta.value == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'El campo etiqueta NO puede estar vacío'
        })
        contador = false;
        return false;
    } else if (firstCampo.value.length == 0) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'El campo asunto NO puede estar vacío'
        })
        contador = false;
        return false;
    } else if (motivo.value.length == 0) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'El campo motivo NO puede estar vacío'
        })
        contador = false;
        return false;
    } else if (usuarioResponsable.value.length == 0) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'El campo Usuario Responsable NO puede estar vacío'
        })
        contador = false;
        return false;
    } else if (usuarioCorresponsable.value.length == 0) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'El campo Usuario Corresponsable NO puede estar vacío'
        })
        contador = false;
        return false;
    } else {
        console.log('hola');
        // Cambia el tipo del botón a "submit"
// Envía el formulario
    formulario.submit();
    }
});



//---------------------------------------------------------------------------


const addButton = document.querySelector('#nombreList2');
const usuariosCorresponsables = [];

addButton.addEventListener('click', agregarUsuario);

function agregarUsuario() {
    const usuarioCorresponsable = inputUsuarioCorresp.value;
    const idUsuarioCorresponsable = id_usuariocor.value;
    const usuariosExistentes = document.querySelectorAll('.usuario-container');

    // Verifica si ya hay tres usuarios corresponsables
    if (usuariosExistentes.length >= 3) {
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Límite de tres usuarios corresponsables alcanzado.'
        });
        return;
    }

    if (usuarioCorresponsable && idUsuarioCorresponsable) {
        

        
        console.log(usuariosCorresponsables);
        // Agrega el identificador a la lista de usuarios corresponsables
        usuariosCorresponsables.push(idUsuarioCorresponsable);
       

        // Actualiza el valor del campo oculto
        document.getElementById('id_todosUserCorrespon').value = usuariosCorresponsables.join(',');
    }
}

const addButton2 = document.querySelector('.div_btn');
   

addButton2.addEventListener('click', agregar);
function agregar() {
     const idUsuarioCorresponsable = id_usuariocor.value;
     const usuarioCorresponsable = inputUsuarioCorresp.value;

     console.log(usuariosCorresponsables);
    // Crea un contenedor div para el usuario y su identificador
        const usuarioContainer = document.createElement('div');
        usuarioContainer.className = 'usuario-container';

        // Crea un div para el usuario (color rojo)
        const usuarioElement = document.createElement('div');
        usuarioElement.className = 'usuario-seleccionado';
        usuarioElement.textContent = usuarioCorresponsable;

        // Crea un botón de eliminar
        const eliminarButton = document.createElement('button');
        eliminarButton.textContent = 'X';
        eliminarButton.type = "button";
        eliminarButton.className = 'eliminar-usuario';


        // Crea un elemento oculto para almacenar el identificador
        const idElement = document.createElement('input');
        idElement.type = 'hidden';
        idElement.className = "input-nuevo";
        idElement.value = idUsuarioCorresponsable;

        // Agrega el usuario, el botón y el identificador al contenedor de usuario
        usuarioContainer.appendChild(usuarioElement);
        usuarioContainer.appendChild(idElement);
        usuarioElement.appendChild(eliminarButton);

        // Agrega un manejador de clic al botón de eliminar
            eliminarButton.addEventListener('click', function () {
                eliminarUsuario(usuarioContainer, idUsuarioCorresponsable);
            });

        // Agrega el contenedor de usuario al contenedor azul con una separación
        const contenedorAzul = document.querySelector('.contenedor-azul');
        contenedorAzul.appendChild(usuarioContainer);
        
        // Limpia los campos de entrada
            inputUsuarioCorresp.value = '';
            id_usuariocor.value = '';


}




document.addEventListener('click', function(event) {
    if (event.target.classList.contains('eliminar-usuario')) {
        // Manejar el clic en el botón "eliminar-usuario" aquí
        const usuarioContainer2 = event.target.closest('.usuario-container');
        if (usuarioContainer2) {
            // Elimina el usuario y el botón al hacer clic
            usuarioContainer2.remove();
            
            // eliminar el ID de usuariosCorresponsables aquí si lo necesitas
            const idUsuarioCorresponsable = usuarioContainer2.querySelector('.input-nuevo').value;
            const index = usuariosCorresponsables.indexOf(idUsuarioCorresponsable);
            if (index !== -1) {
                usuariosCorresponsables.splice(index, 1);
            }
            
            console.log(usuariosCorresponsables);
            console.log("hola");
        }
    }
});


function eliminarUsuario(usuarioContainer, idUsuarioCorresponsable) {
    // Elimina el usuario y el botón al hacer clic
    usuarioContainer.remove();

    // Elimina el ID de usuariosCorresponsables del array
    const index = usuariosCorresponsables.indexOf(idUsuarioCorresponsable);
    if (index !== -1) {
        usuariosCorresponsables.splice(index, 1);
    }

    // Actualiza el valor del campo oculto id_todosUserCorrespon
    document.getElementById('id_todosUserCorrespon').value = usuariosCorresponsables.join(',');
}

