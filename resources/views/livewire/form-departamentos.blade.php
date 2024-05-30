<div class="w-full h-full font-montserrat p-5 design-over">
    <x-form wire:submit="agendarCita">
        <div class="flex items-center justify-between gap-2 mt-2">
            <div class="flex gap-2 self-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16"><g fill="#2AA8FF"><path d="M12.5 16a3.5 3.5 0 1 0 0-7a3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0"/><path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6.5a.5.5 0 0 1-1 0V1H3v14h3v-2.5a.5.5 0 0 1 .5-.5H8v4H3a1 1 0 0 1-1-1z"/><path d="M4.5 2a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/></g></svg>
                <h1 class="font-extrabold text-xl text-color-title-ds">Registrar Departamentos</h1>
            </div>
        </div>


        <div class="divider-ps"></div>


        
        <div class="flex flex-col gap-y-8 justify-center">
            {{-- personal info card --}}
            <div class=" flex card h-90 p-6 shadow-xl bg-white mr-10 ml-10">
                <div class="flex align-middle items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
                        <g fill="none" stroke="#2AA8FF" stroke-width="1.5">
                            <circle cx="9" cy="9" r="2" />
                            <path d="M13 15c0 1.105 0 2-4 2s-4-.895-4-2s1.79-2 4-2s4 .895 4 2Z" />
                            <path stroke-linecap="round"
                                d="M22 12c0 3.771 0 5.657-1.172 6.828C19.657 20 17.771 20 14 20h-4c-3.771 0-5.657 0-6.828-1.172C2 17.657 2 15.771 2 12c0-3.771 0-5.657 1.172-6.828C4.343 4 6.229 4 10 4h4c3.771 0 5.657 0 6.828 1.172c.47.47.751 1.054.92 1.828M19 12h-4m4-3h-5m5 6h-3" />
                        </g>
                    </svg>
                    <h1 class="font-bold text-lg text-color-title-ds">Informacion General</h1>
                </div>

                <div class="divider-norm"></div>

                <div class="font-regular text-color-title-ds text-xs grid grid-cols-2 gap-y-5 gap-x-10">
                    <x-input wire:model="nombre" label="Nombre" icon="" hint=""
                        class="input input-xs input-info bg-white" />
                    <x-input wire:model="descripcion" label="Descripcion" icon="" hint=""
                        class="input input-xs input-info bg-white" />
                        <x-input wire:model="telefono" label="Telefono" icon="" hint=""
                        class="input input-xs input-info bg-white"/>
                </div>
            </div>

            <div class="flex h-48 pl-10 pr-10 space-x-4">

                <div class="card w-1/2 p-6 shadow-xl bg-white">
                    <div class="flex align-middle items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 48 48">
                            <defs>
                                <mask id="ipTBuildingFour0">
                                    <g fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="4">
                                        <path fill="#555" fill-rule="evenodd" d="m17 14l27 10v20H17z"
                                            clip-rule="evenodd" />
                                        <path d="M17 14L4 24v20h13m18 0V32l-9-3v15m18 0H17" />
                                    </g>
                                </mask>
                            </defs>
                            <path fill="#2AA8FF" d="M0 0h48v48H0z" mask="url(#ipTBuildingFour0)" />
                        </svg>
                        <h1 class="font-bold text-lg text-color-title-ds">Instituciones</h1>
                    </div>
                    <div class="font-regular text-color-title-ds text-xs">
                        <x-choices label="Institucion" wire:model="institucion_medica_id" :options="$instituciones"
                            search-function="searchInstituciones" no-result-text="Ops! Nothing here ..." single searchable
                            @change-selection="$wire.set('institucion_medica_id', event.detail.value);" debounce="250ms"
                            class="select select-xs select-info bg-white !text-xs" />
                    </div>
                </div>

                <div class="card w-1/2 p-6 shadow-xl bg-white">
                    <div class="flex align-middle items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 48 48">
                            <defs>
                                <mask id="ipTBuildingFour0">
                                    <g fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="4">
                                        <path fill="#555" fill-rule="evenodd" d="m17 14l27 10v20H17z"
                                            clip-rule="evenodd" />
                                        <path d="M17 14L4 24v20h13m18 0V32l-9-3v15m18 0H17" />
                                    </g>
                                </mask>
                            </defs>
                            <path fill="#2AA8FF" d="M0 0h48v48H0z" mask="url(#ipTBuildingFour0)" />
                        </svg>
                        <h1 class="font-bold text-lg text-color-title-ds">Especialidad</h1>
                    </div>
                    <div class="font-regular text-color-title-ds text-xs">
                        <x-choices label="Especialidad" wire:model="escpecialidad_id" :options="$escpecialidades"
                            search-function="mount" no-result-text="Ops! Nothing here ..." single searchable
                            @change-selection="$wire.set('institucion_medica_id', event.detail.value);" debounce="250ms"
                            class="select select-xs select-info bg-white !text-xs" />
                    </div>
                </div>
            </div>
        </div>

        <x-slot:actions>
            <div class="justify-self-end mr-10 mt-6">
                <x-button label="Registrar" icon="o-plus-circle" class=" btn-sm btn-info text-white rounded-3xl"
                type="submit" spinner='save' />
            </div>  
        </x-slot:actions>

    </x-form> 
</div>
