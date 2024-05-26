<div class="h-full w-full flex justify-end pr-16">
    <div style="height: 90%; width: 35%; font-size:10px" class="font-montserrat design-over bg-white">
        <div id="calendario" style="width: 100%">
        </div>
        @script
        <script>
            $wire.on('CitasCargadas', (citas) => {
                citas = citas[0];
                var calendarioEl = document.getElementById('calendario');
                var calendario = new FullCalendar.Calendar(calendarioEl, {
                    initialView: 'listWeek',
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
