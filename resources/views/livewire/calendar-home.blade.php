<div class="h-44 w-5/6 mb-3 mr-10 justify-self-end mt-2">
    <div style="height: 100%; width: 100%; font-size:10px" class="font-montserrat design-over card h-44 shadow-xl bg-white p-3">
        <div id="calendario" style="width: 100%">
        </div>
        @script
        <script>
            $wire.on('CitasCargadas', (citas) => {
                citas = citas[0];
                var calendarioEl = document.getElementById('calendario');
                var calendario = new FullCalendar.Calendar(calendarioEl, {
                    initialView: 'dayGridDay',
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
</div>
