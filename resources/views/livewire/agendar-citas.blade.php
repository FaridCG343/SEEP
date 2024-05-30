<div class="w-full h-full font-montserrat p-5 design-over">
    <x-form wire:submit="agendarCita">
        <x-choices label="Paciente" wire:model="pacienteId" :options="$pacientes" search-function="searchPacientes"
            no-result-text="Ops! Nothing here ..." single searchable debounce="250ms" />

        <x-choices label="Medico" wire:model="medicoId" :options="$medicos" search-function="searchMedicos"
            @change-selection="$wire.set('medicoId', event.detail.value);" no-result-text="Ops! Nothing here ..." single
            searchable debounce="250ms" />

        <x-choices label="Institucion" wire:model="institucionId" :options="$instituciones"
            search-function="searchInstituciones" no-result-text="Ops! Nothing here ..." single searchable
            @change-selection="$wire.set('institucionId', event.detail.value);" debounce="250ms" />

        <x-choices label="Departamento" wire:model="departamentoId" :options="$departamentos" single />

        <x-datepicker label="Fecha" wire:model.live="fecha" type="date" icon="o-calendar" :config="$fechaOptions" />

        <x-choices label="Hora" wire:model="hora" :options="$horasDisponibles" single />

        <x-choices label="Tipo de cita" wire:model="tipo" :options="$tipos" single />

        <x-textarea label="Motivo" wire:model="motivo" />

        <x-slot:actions>
            <x-button label="Click me!" class="btn-primary" type="submit" spinner="agendarCita" />
        </x-slot:actions>
    </x-form>
</div>
