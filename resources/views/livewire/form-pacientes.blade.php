<div class="w-full h-full font-montserrat p-5 design-over">
        {{-- form --}}
        <x-form wire:submit.prevent="store">

            <div class="flex items-center justify-between gap-2 mt-2">
                <div class="flex gap-2 self-center">
                    <h1 class="font-extrabold text-xl text-color-title-ds">New Patient</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#5EADFF"
                        class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                    </svg>
                </div>
                
                <div class="">
                    <x-button label="Agregar" icon="o-plus-circle" class=" btn-sm btn-info text-white rounded-3xl" type="submit" spinner='store'/>
                </div>
            </div>

    
            <div class="divider-ps"></div>

            <div class="flex flex-wrap justify-start">

                {{-- personal info card --}}
                <div class="card w-96 p-6 shadow-xl bg-white mr-10 ml-10">
                    <div class="flex align-middle items-center gap-2">
                        <h1 class="font-bold text-lg text-color-title-ds">Personal Information</h1>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#5EADFF" class="w-4 h-4">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                        </svg>
                    </div>

                    <div class="divider-norm"></div>

                    <div class="font-regular text-color-title-ds text-xs">

                        <x-input wire:model="nombre" label="Nombre" icon="" hint=""
                            class="input input-xs input-info bg-white mb-5" />
                        <x-input wire:model="apellidoP" label="Apellido Paterno" icon="" hint=""
                            class="input input-xs input-info bg-white mb-5" />
                        <x-input wire:model="apellidoM" label="Apellido Materno" icon="" hint="Opcional"
                            class="input input-xs input-info bg-white" />
                        <div class="mt-5 mb-5">
                            <x-input wire:model="curp" label="CURP" icon="" hint=""
                                class="input input-xs input-info bg-white" />
                        </div>

        
                        <x-select wire:model="sexo" label="Genero" :options="$sexoOption" class="select select-xs select-info bg-white mb-5" />

                        <x-datetime label="Fecha de nacimiento" wire:model="fechaNac" icon-right="o-calendar"
                            class="input input-xs input-info bg-white" />

                    </div>


                </div>
                {{-- direction card --}}
                <div class="card w-96 p-6 shadow-xl bg-white">
                    <div class="flex align-middle items-center gap-2">
                        <h1 class="font-bold text-lg text-color-title-ds">Direction</h1>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#5EADFF" class="w-4 h-4">
                            <path
                                d="M8.543 2.232a.75.75 0 0 0-1.085 0l-5.25 5.5A.75.75 0 0 0 2.75 9H4v4a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 1 1 2 0v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V9h1.25a.75.75 0 0 0 .543-1.268l-5.25-5.5Z" />
                        </svg>
                    </div>


                    <div class="divider-norm"></div>

                    <x-input wire:model="calle" label="Calle" icon="" hint=""
                        class="input input-xs input-info bg-white mb-5" />

                    <x-input wire:model="numExt" label="Numero Exterior" icon="" hint=""
                        class="input input-xs input-info bg-white mb-5" />

                    <div class="mt-5 mb-5">
                        <x-input wire:model="numInt" label="Numero Interior" icon="" hint="Opcional"
                        class="input input-xs input-info bg-white" />
                    </div>
                
                    <x-input wire:model="colonia" label="Colonia" icon="" hint=""
                        class="input input-xs input-info bg-white mb-5" />

                    <x-input wire:model="codigoPost" label="Codigo Postal" icon="" hint=""
                        class="input input-xs input-info bg-white mb-5" />

                    <x-input wire:model="ciudad" label="Ciudad" icon="" hint=""
                        class="input input-xs input-info bg-white mb-5" />

                    <x-input wire:model="estado" label="Estado" icon="" hint=""
                        class="input input-xs input-info bg-white mb-5" />
                </div>

                {{-- contacto --}}
                <div class="card w-96 p-6 shadow-xl bg-white mt-10 ml-10">
                    <div class="flex align-middle items-center gap-2">
                        <h1 class="font-bold text-lg text-color-title-ds">Contact</h1>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#5EADFF" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                        </svg>                          
                    </div>

                    <div class="divider-norm"></div>

                    <x-input wire:model="telefono" label="Telefono" icon="" hint=""
                        class="input input-xs input-info bg-white mb-5" />

                    <x-input wire:model="email" label="Email" icon="" hint=""
                        class="input input-xs input-info bg-white mb-5" />

                </div>
            </div>
        </x-form>
</div>
