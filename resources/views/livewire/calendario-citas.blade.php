<div>
    <div id="calendario">
    </div>
    @script
    <script>
       $wire.on('CitasCargadas', (citas) => {
            console.log(citas);
            var calendarioEl = document.getElementById('calendario');
            var calendario = new FullCalendar.Calendar(calendarioEl, {
                initialView: 'dayGridMonth',
                locale: 'es',
                events: citas
            });
            calendario.render();
       });
    </script>
    @endscript
</div>
