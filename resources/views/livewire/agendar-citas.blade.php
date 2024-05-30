<div class="w-full h-full font-montserrat p-5 design-over">
    <x-form wire:submit="agendarCita">
        <!-- Header -->
        <div class="flex items-center justify-between gap-2 mt-2">
            <div class="flex gap-2 self-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 48 48">
                    <g fill="none" stroke="#2AA8FF" stroke-width="4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M23 42H9a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h28a2 2 0 0 1 2 2v11.5"/>
                        <path stroke-linejoin="round" d="M36.636 27C39.046 27 41 28.88 41 31.2c0 3.02-2.91 5.6-4.364 7c-.97.933-2.181 1.867-3.636 2.8c-1.454-.933-2.667-1.867-3.636-2.8c-1.455-1.4-4.364-3.98-4.364-7c0-2.32 1.954-4.2 4.364-4.2c1.517 0 2.854.746 3.636 1.878A4.406 4.406 0 0 1 36.636 27Z"/>
                        <path stroke-linecap="round" d="M15 14h16"/>
                    </g>
                </svg>
                <h1 class="font-extrabold text-xl text-color-title-ds">Agendar Cita</h1>
            </div>
        </div>

        <div class="divider-ps"></div>

        <div class="flex flex-col gap-y-8 justify-center">
            <!-- Paciente y Médico -->
            <div class="flex card h-44 p-6 shadow-xl bg-white mx-10">
                <div class="flex align-middle items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
                        <g fill="none" stroke="#2AA8FF" stroke-width="1.5">
                            <circle cx="9" cy="9" r="2" />
                            <path d="M13 15c0 1.105 0 2-4 2s-4-.895-4-2s1.79-2 4-2s4 .895 4 2Z" />
                            <path stroke-linecap="round"
                                d="M22 12c0 3.771 0 5.657-1.172 6.828C19.657 20 17.771 20 14 20h-4c-3.771 0-5.657 0-6.828-1.172C2 17.657 2 15.771 2 12c0-3.771 0-5.657 1.172-6.828C4.343 4 6.229 4 10 4h4c3.771 0 5.657 0 6.828 1.172c.47.47.751 1.054.92 1.828M19 12h-4m4-3h-5m5 6h-3" />
                        </g>
                    </svg>
                    <h1 class="font-bold text-lg text-color-title-ds">Paciente y Médico</h1>
                </div>

                <div class="divider-norm"></div>

                <div class="font-regular text-color-title-ds text-xs grid grid-cols-2 gap-y-5 gap-x-10">
                    <x-choices label="Paciente" wire:model="pacienteId" :options="$pacientes" search-function="searchPacientes"
                    no-result-text="Ops! Nothing here ..." single searchable debounce="250ms" 
                    class="select select-xs select-info bg-white !text-xs" />
        
                    <x-choices label="Médico" wire:model="medicoId" :options="$medicos" search-function="searchMedicos"
                    @change-selection="$wire.set('medicoId', event.detail.value);" no-result-text="Ops! Nothing here ..." single
                    searchable debounce="250ms" 
                    class="select select-xs select-info bg-white !text-xs" />
                </div>    
            </div>

            <!-- Institución y Departamento -->
            <div class="flex card h-44 p-6 shadow-xl bg-white mx-10">
                <div class="flex align-middle items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
                        <g fill="none" stroke="#2AA8FF" stroke-width="1.5">
                            <circle cx="9" cy="9" r="2" />
                            <path d="M13 15c0 1.105 0 2-4 2s-4-.895-4-2s1.79-2 4-2s4 .895 4 2Z" />
                            <path stroke-linecap="round"
                                d="M22 12c0 3.771 0 5.657-1.172 6.828C19.657 20 17.771 20 14 20h-4c-3.771 0-5.657 0-6.828-1.172C2 17.657 2 15.771 2 12c0-3.771 0-5.657 1.172-6.828C4.343 4 6.229 4 10 4h4c3.771 0 5.657 0 6.828 1.172c.47.47.751 1.054.92 1.828M19 12h-4m4-3h-5m5 6h-3" />
                        </g>
                    </svg>
                    <h1 class="font-bold text-lg text-color-title-ds">Institución y Departamento</h1>
                </div>

                <div class="divider-norm"></div>

                <div class="font-regular text-color-title-ds text-xs grid grid-cols-2 gap-y-5 gap-x-10">
                    <x-choices label="Institución" wire:model="institucionId" :options="$instituciones"
                    search-function="searchInstituciones" no-result-text="Ops! Nothing here ..." single searchable
                    @change-selection="$wire.set('institucionId', event.detail.value);" debounce="250ms"
                    class="select select-xs select-info bg-white !text-xs"  />

                    <x-choices label="Departamento" wire:model="departamentoId" :options="$departamentos" single 
                    class="select select-xs select-info bg-white !text-xs" />
                </div>
            </div>

            <!-- Fecha, Hora, Tipo de Cita y Motivo -->
            <div class="flex card h-auto p-6 shadow-xl bg-white mx-10">
                <div class="flex align-middle items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
                        <g fill="none" stroke="#2AA8FF" stroke-width="1.5">
                            <circle cx="9" cy="9" r="2" />
                            <path d="M13 15c0 1.105 0 2-4 2s-4-.895-4-2s1.79-2 4-2s4 .895 4 2Z" />
                            <path stroke-linecap="round"
                                d="M22 12c0 3.771 0 5.657-1.172 6.828C19.657 20 17.771 20 14 20h-4c-3.771 0-5.657 0-6.828-1.172C2 17.657 2 15.771 2 12c0-3.771 0-5.657 1.172-6.828C4.343 4 6.229 4 10 4h4c3.771 0 5.657 0 6.828 1.172c.47.47.751 1.054.92 1.828M19 12h-4m4-3h-5m5 6h-3" />
                        </g>
                    </svg>
                    <h1 class="font-bold text-lg text-color-title-ds">Detalles de la Cita</h1>
                </div>

                <div class="divider-norm"></div>

                <div class="font-regular text-color-title-ds text-xs grid grid-cols-2 gap-y-5 gap-x-10">
                    <x-datepicker label="Fecha" wire:model.live="fecha" type="date" icon="o-calendar" :config="$fechaOptions" 
                    class="select select-xs select-info bg-white !text-xs" />

                    <!--conflicto-->
                    <x-choices label="Hora" wire:model="hora" :options="$horasDisponibles" single 
                    class="select select-xs select-info bg-white !text-xs" />

                    <x-choices label="Tipo de cita" wire:model="tipo" :options="$tipos" single 
                    class="select select-xs select-info bg-white !text-xs" />

                    <x-textarea label="Motivo" wire:model="motivo" 
                    class="input input-xs input-info bg-white !text-xs" />
                </div>
            </div>
        </div>

        <!-- Acción -->
        <x-slot:actions>
            <div class="justify-self-end mr-10 mt-6">
                <x-button label="Agendar" icon="o-plus-circle" class="btn-sm btn-info text-white rounded-3xl" 
                type="submit" spinner="agendarCita" />
            </div>
        </x-slot:actions>
    </x-form>
</div>
