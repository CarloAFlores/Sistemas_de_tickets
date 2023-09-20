document.addEventListener("DOMContentLoaded", function () {
        const filterNoTicket = document.getElementById("filterNoTicket");
        const filterEtiqueta = document.getElementById("filterEtiqueta");
        const filterAsunto = document.getElementById("filterAsunto");
        const filterComentario = document.getElementById("filterComentario");
        const filterUsuarioCrea = document.getElementById("filterUsuarioCrea");
        const filterStatusTicket = document.getElementById("filterStatusTicket");

        function applyFilters() {
            const tableRows = document.querySelectorAll("#ticketsContainer tr.tbrow");
            tableRows.forEach(function (row) {
                const noTicket = row.querySelector("td[data-label='No. Ticket']").textContent.trim().toLowerCase();
                const etiqueta = row.querySelector("td[data-label='Etiqueta']").textContent.trim().toLowerCase();
                const asunto = row.querySelector("td[data-label='Asunto']").textContent.trim().toLowerCase();
                const comentario = row.querySelector("td[data-label='Comentario']").textContent.trim().toLowerCase();
                const usuarioCrea = row.querySelector("td[data-label='Usuario Crea']").textContent.trim().toLowerCase();
                const statusTicket = row.querySelector("td[data-label='Status Ticket']").textContent.trim().toLowerCase();

                const noTicketFilter = filterNoTicket.value.trim().toLowerCase();
                const etiquetaFilter = filterEtiqueta.value.trim().toLowerCase();
                const asuntoFilter = filterAsunto.value.trim().toLowerCase();
                const comentarioFilter = filterComentario.value.trim().toLowerCase();
                const usuarioCreaFilter = filterUsuarioCrea.value.trim().toLowerCase();
                const statusTicketFilter = filterStatusTicket.value.trim().toLowerCase();

                const shouldShow =
                    (noTicketFilter === "" || noTicket.includes(noTicketFilter)) &&
                    (etiquetaFilter === "" || etiqueta.includes(etiquetaFilter)) &&
                    (asuntoFilter === "" || asunto.includes(asuntoFilter)) &&
                    (comentarioFilter === "" || comentario.includes(comentarioFilter)) &&
                    (usuarioCreaFilter === "" || usuarioCrea.includes(usuarioCreaFilter)) &&
                    (statusTicketFilter === "" || statusTicket.includes(statusTicketFilter));

                row.style.display = shouldShow ? "" : "none";
            });
        }

        // Agrega un evento "input" para cada campo de filtro
        filterNoTicket.addEventListener("input", applyFilters);
        filterEtiqueta.addEventListener("input", applyFilters);
        filterAsunto.addEventListener("input", applyFilters);
        filterComentario.addEventListener("input", applyFilters);
        filterUsuarioCrea.addEventListener("input", applyFilters);
        filterStatusTicket.addEventListener("change", applyFilters);
    });

