
<div style="height: 100%; width:100%" class="p-5 flex flex-col justify-center">
    <div class="flex items-center justify-between gap-2 mt-2">
        <div class="flex gap-2 self-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256" class="w-7 h-7"><path fill="#2AA8FF" d="M208 28h-20v-4a12 12 0 0 0-24 0v4H92v-4a12 12 0 0 0-24 0v4H48a20 20 0 0 0-20 20v160a20 20 0 0 0 20 20h160a20 20 0 0 0 20-20V48a20 20 0 0 0-20-20M68 52a12 12 0 0 0 24 0h72a12 12 0 0 0 24 0h16v24H52V52ZM52 204V100h152v104Zm60-80v56a12 12 0 0 1-24 0v-36.68a12 12 0 0 1-9.37-22l16-8A12 12 0 0 1 112 124m61.49 33.88L163.9 168h4.1a12 12 0 0 1 0 24h-32a12 12 0 0 1-8.71-20.25L155.45 142a4 4 0 0 0 .55-2a4 4 0 0 0-7.47-2a12 12 0 0 1-20.78-12A28 28 0 0 1 180 140a27.77 27.77 0 0 1-5.64 16.86a11 11 0 0 1-.87 1.02"/></svg>
            <h1 class="font-extrabold text-xl text-color-title-ds">Calendario mensual</h1>
        </div>
    </div>

    <div class="divider-ps"></div>

    <div style="height: 90%; width: 90% display: flex; justify-content: center; align-items: center;" class="font-montserrat design-over center-calendar">
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
</div>

