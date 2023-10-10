document.addEventListener("DOMContentLoaded", function () {
        const filterNoTicket = document.getElementById("filterNoTicket");
        const filterEtiqueta = document.getElementById("filterEtiqueta");
        const filterAsunto = document.getElementById("filterAsunto");
        const filterComentario = document.getElementById("filterComentario");
        const filterUsuarioResponsable = document.getElementById("filterUsuarioResponsable");
        const filterUsuarioCorresponsable = document.getElementById("filterUsuarioCorresponsable");       
        const filterStatusTicket = document.getElementById("filterStatusTicket");

        function applyFilters() {
            const tableRows = document.querySelectorAll("#ticketsContainer tr.tbrow");
            tableRows.forEach(function (row) {
                const noTicket = row.querySelector("td[data-label='No. Ticket']").textContent.trim().toLowerCase();
                const etiqueta = row.querySelector("td[data-label='Etiqueta']").textContent.trim().toLowerCase();
                const asunto = row.querySelector("td[data-label='Asunto']").textContent.trim().toLowerCase();
                const comentario = row.querySelector("td[data-label='Comentario']").textContent.trim().toLowerCase();
                const usuarioResp = row.querySelector("td[data-label='Usuario Responsable']").textContent.trim().toLowerCase();
                const usuarioCorresp = row.querySelector("td[data-label='Usuario Corresponsable']").textContent.trim().toLowerCase();
                const statusTicket = row.querySelector("td[data-label='Status Ticket']").textContent.trim().toLowerCase();

                const noTicketFilter = filterNoTicket.value.trim().toLowerCase();
                const etiquetaFilter = filterEtiqueta.value.trim().toLowerCase();
                const asuntoFilter = filterAsunto.value.trim().toLowerCase();
                const comentarioFilter = filterComentario.value.trim().toLowerCase();
                const usuarioRespFilter = filterUsuarioResponsable.value.trim().toLowerCase();
                const usuarioCorrespFilter = filterUsuarioCorresponsable.value.trim().toLowerCase();
                const statusTicketFilter = filterStatusTicket.value.trim().toLowerCase();

                const shouldShow =
                    (noTicketFilter === "" || noTicket.includes(noTicketFilter)) &&
                    (etiquetaFilter === "" || etiqueta.includes(etiquetaFilter)) &&
                    (asuntoFilter === "" || asunto.includes(asuntoFilter)) &&
                    (comentarioFilter === "" || comentario.includes(comentarioFilter)) &&
                    (usuarioRespFilter === "" || usuarioResp.includes(usuarioRespFilter)) &&
                    (usuarioCorrespFilter === "" || usuarioCorresp.includes(uusuarioCorrespFilter))&&
                    (statusTicketFilter === "" || statusTicket.includes(statusTicketFilter));

                row.style.display = shouldShow ? "" : "none";
            });
        }

        // Agrega un evento "input" para cada campo de filtro
        filterNoTicket.addEventListener("input", applyFilters);
        filterEtiqueta.addEventListener("input", applyFilters);
        filterAsunto.addEventListener("input", applyFilters);
        filterComentario.addEventListener("input", applyFilters);
        filterUsuarioResponsable.addEventListener("input", applyFilters);
        filterUsuarioCorresponsable.addEventListener("input", applyFilters);
        filterStatusTicket.addEventListener("change", applyFilters);
    });

