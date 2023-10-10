

    // Obtén todos los botones con la clase "boton-revision"
    var botonesRevision = document.querySelectorAll(".boton-revision");

    // Agrega un evento de clic a cada botón
    botonesRevision.forEach(function(boton) {
        boton.addEventListener("click", function() {
            // Obtiene el ID del botón que se hizo clic
            var idTicket = this.getAttribute("data-id");
            
            // Redirige a la página deseada con el ID del ticket
            window.location.href = "terminados?id=" + idTicket;
            console.log(idTicket);
        });
    });

