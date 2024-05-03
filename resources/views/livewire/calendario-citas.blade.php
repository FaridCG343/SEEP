<div style="height: 85%; width: 95%">
    <div id="calendario" style="width: 100%">
    </div>
    @script
    <script>
        $wire.on('CitasCargadas', (citas) => {
            citas = citas[0];
            var calendarioEl = document.getElementById('calendario');
            var calendario = new FullCalendar.Calendar(calendarioEl, {
                initialView: 'dayGridMonth',
                events: citas,
                locale: 'es',
                height: "100%",
                eventClick: function(info) {
                    var eventObj = info.event;
                    Swal.fire({
                        title: eventObj.title,
                        html: '<b>Fecha:</b> ' + eventObj.start.toLocaleDateString() + '<br>' +
                            '<b>Hora:</b> ' + eventObj.start.toLocaleTimeString() + '<br>' +
                            '<b>Motivo:</b> ' + eventObj.extendedProps.motivo,
                    });
                }
            });
            calendario.render();
       });
    </script>
    @endscript
</div>