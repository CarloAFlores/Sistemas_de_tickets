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
	},400)
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
	},400)
})

function hola2(id){

	modalC2.style.opacity = "1";
	modalC2.style.visibility = "visible";
	modal2.classList.toggle("modal-close2");

	console.log(id)
}

//funcion del modal3

let cerrar3 = document.querySelectorAll(".close3")[0];
let modal3 = document.querySelectorAll(".tercermodal")[0];
let modalC3 = document.querySelectorAll(".tercermodal-container")[0];


cerrar3.addEventListener("click",function(){
	modal3.classList.toggle("modal-close3");

	setTimeout(function(){
		modalC3.style.opacity = "0";
		modalC3.style.visibility = "hidden";
	},400)
})

function hola3(id){

	modalC3.style.opacity = "1";
	modalC3.style.visibility = "visible";
	modal3.classList.toggle("modal-close3");

	console.log(id)
}

//funcion del modal4(borrar)
let cerrarx = document.querySelectorAll(".close4")[0];
let cerrar4 = document.querySelectorAll(".aceptar1")[0];
let modal4 = document.querySelectorAll(".cuartomodal")[0];
let modalC4 = document.querySelectorAll(".cuartomodal-container")[0];

let id_ticket = document.querySelector("#id_ticket");

//FUNCIÓN PARA CERRAR EL MODAL CON ACEPTAR
cerrar4.addEventListener("click",function(){
	modal4.classList.toggle("modal-close4");

	setTimeout(function(){
		modalC4.style.opacity = "0";
		modalC4.style.visibility = "hidden";
	},400)
})

//FUNCIÓN PARA CERRAR EL MODAL CON LA X
cerrarx .addEventListener("click",function(){
	modal4.classList.toggle("modal-close4");

	setTimeout(function(){
		modalC4.style.opacity = "0";
		modalC4.style.visibility = "hidden";
	},400)
})

function hola4(id){

	modalC4.style.opacity = "1";
	modalC4.style.visibility = "visible";
	modal4.classList.toggle("modal-close4");

	id_ticket.value = id;

	console.log(id)
}


function aceptar4(id) {
	let modalC4 = document.querySelectorAll(".cuartomodal-container")[0];
    let id_ticket = document.querySelector("#id_ticket");
    let ocultar_modal = document.querySelector("#aceptar");
    const idx = id_ticket.value;



    fetch('eliminar', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'id=' + encodeURIComponent(idx)
    })
    .then((response) => response.json())
    .then(result => {
        console.log(result);

        // Obtener el contenedor donde mostrarás los tickets
        const ticketsContainer = document.querySelector("#ticketsContainer");

        // Limpiar el contenido anterior del contenedor
        ticketsContainer.innerHTML = '';

        // Iterar sobre los tickets y crear elementos para mostrarlos
        result.forEach(ticket => {
            const ticketElement = document.createElement('tr');
            ticketElement.classList.add('tbrow');

            const ticketHTML = `
                <td data-label="No. Ticket">${ticket.id}</td>
                <td data-label="Etiqueta">${ticket.etiqueta}</td>
                <td data-label="Asunto">${ticket.asunto}</td>
                <td data-label="Asunto">${ticket.descripcion}</td>
                <td data-label="Asunto">${ticket.nombre}</td>
                <td data-label="Status Ticket">${ticket.nombre_status}</td>
                <td data-label="Progreso">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated barritamodal bg-${ticket.color}" role="progressbar" style="width:${ticket.progreso}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">${ticket.progreso}%</div>
                    </div> 
                </td>

                <td data-label="Opciones">
                   	<div class="opciones_pequeñas"> 

                    	<button href="#" class="boton-li icono " title="Status" type="button" id="miboton" onclick="hola(<?php echo $ticket->id; ?>)">
                    	    <i class='bx bx-list-ul' style='color:#ffffff'></i>
                    	</button>

                    	<button class="boton-subir icono" title="Archivo" onclick="hola2(<?php echo $ticket->id; ?>)" id="">
                    	    <i class='bx bx-upload' style='color:#ffffff'></i>
                    	</button>

                    	<button class="boton-resubir icono" title="AdRespuesta" onclick="hola3(<?php echo $ticket->id; ?>)">
                    	    <i class='bx bx-upload' style='color:#ffffff'></i>
                    	</button>

                    	<button class="boton-book icono" title="Resumen">
                    	    <i class='bx bxs-book-content' style='color:#ffffff'></i>
                    	</button>

                        <form action="" method="GET">
                    	<button class="boton-trash icono" title="Eliminar" type="button" id="Seraeliminado" onclick="hola4(${ticket.id})">
                    	    <i class='bx bxs-trash' style='color:#ffffff' ></i>
                    	</button>
                        </form>

                    	<button class="boton-revision icono" title="Actualizar">
                    	    <i class='bx bx-revision' style='color:#ffffff' ></i>
                    	</button>
                        
                   	</div>
                </td>
                <td data-label="Detalles">
                    <a href="en_proceso?id=${ticket.id}" class="btn" type="button">Ver mas</a>
                </td>

            `;

            ticketElement.innerHTML = ticketHTML;
            ticketsContainer.appendChild(ticketElement);
        });

    })
    .catch(error => {
        console.log('Error al realizar la solicitud:', error);
    });
}
/*funcion del modal5(vermás)

let cerrar5 = document.querySelectorAll(".close5")[0];
let modal5 = document.querySelectorAll(".quintomodal")[0];
let modalC5 = document.querySelectorAll(".quintomodal-container")[0];


cerrar5.addEventListener("click",function(){
	modal5.classList.toggle("modal-close5");

	setTimeout(function(){
		modalC5.style.opacity = "0";
		modalC5.style.visibility = "hidden";
	},400)
})

function hola5(id){

	modalC5.style.opacity = "1";
	modalC5.style.visibility = "visible";
	modal5.classList.toggle("modal-close5");

	console.log(id)
}
*/

/*FUNCION PARA EL BUSCADOR MOVIL*/
 function obtener(){

 	console.log('hola');

 	let ver = document.getElementById("ocultar-y-mostrar");
 	if (ver.style.display === "none") {
 	    ver.style.display = "flex";
 	} else {
 	    ver.style.display = "none";
 	}

 }