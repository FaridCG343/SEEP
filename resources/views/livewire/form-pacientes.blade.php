<div class="w-full h-full font-montserrat p-5 design-over">
    {{-- form --}}
    <x-form wire:submit.prevent="store">

        <div class="flex items-center justify-between gap-2 mt-2">
            <div class="flex gap-2 self-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="#5EADFF" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                </svg>
                <h1 class="font-extrabold text-xl text-color-title-ds">Registrar Paciente</h1>
            </div>
        </div>


        <div class="divider-ps"></div>

        <div class="flex flex-col gap-y-8 justify-center">
            {{-- personal info card --}}
            <div class=" flex card h-90 p-6 shadow-xl bg-white mr-10 ml-10">
                <div class="flex align-middle items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><g fill="none" stroke="#2AA8FF" stroke-width="1.5"><circle cx="9" cy="9" r="2"/><path d="M13 15c0 1.105 0 2-4 2s-4-.895-4-2s1.79-2 4-2s4 .895 4 2Z"/><path stroke-linecap="round" d="M22 12c0 3.771 0 5.657-1.172 6.828C19.657 20 17.771 20 14 20h-4c-3.771 0-5.657 0-6.828-1.172C2 17.657 2 15.771 2 12c0-3.771 0-5.657 1.172-6.828C4.343 4 6.229 4 10 4h4c3.771 0 5.657 0 6.828 1.172c.47.47.751 1.054.92 1.828M19 12h-4m4-3h-5m5 6h-3"/></g></svg>

                    <h1 class="font-bold text-lg text-color-title-ds">Informacion Personal</h1>
                </div>

                <div class="divider-norm"></div>

                <div class="font-regular text-color-title-ds text-xs grid grid-cols-2 gap-y-5 gap-x-10">
                    <x-input wire:model="nombre" label="Nombre" icon="" hint=""
                        class="input input-xs input-info bg-white" />
                    <x-input wire:model="apellidoP" label="Apellido Paterno" icon="" hint=""
                        class="input input-xs input-info bg-white" />
                    <x-input wire:model="apellidoM" label="Apellido Materno" icon="" hint="Opcional"
                        class="input input-xs input-info bg-white" />
                    <x-input wire:model="curp" label="CURP" icon="" hint=""
                        class="input input-xs input-info bg-white" />
                    <x-select wire:model="sexo" label="Genero" :options="$sexoOption"
                        class="select select-xs select-info bg-white" />
                    <x-datetime label="Fecha de nacimiento" wire:model="fechaNac" icon-right="o-calendar"
                        class="input input-xs input-info bg-white" />
                </div>
            </div>


            {{-- direction card --}}
            <div class="flex card h-5/6 p-6 shadow-xl bg-white mr-10 ml-10">
                <div class="flex align-middle items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#5EADFF" class="w-4 h-4">
                        <path
                            d="M8.543 2.232a.75.75 0 0 0-1.085 0l-5.25 5.5A.75.75 0 0 0 2.75 9H4v4a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 1 1 2 0v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V9h1.25a.75.75 0 0 0 .543-1.268l-5.25-5.5Z" />
                    </svg>
                    <h1 class="font-bold text-lg text-color-title-ds">Dirección</h1>
                </div>


                <div class="divider-norm"></div>

                <div class="font-regular text-color-title-ds text-xs grid grid-cols-2 gap-y-5 gap-x-10">
                    <x-input wire:model="calle" label="Calle" icon="" hint=""
                        class="input input-xs input-info bg-white" />

                    <x-input wire:model="numExt" label="Numero Exterior" icon="" hint=""
                        class="input input-xs input-info bg-white" />

                    <x-input wire:model="numInt" label="Numero Interior" icon="" hint="Opcional"
                        class="input input-xs input-info bg-white" />

                    <x-input wire:model="colonia" label="Colonia" icon="" hint=""
                        class="input input-xs input-info bg-white" />

                    <x-input wire:model="codigoPost" label="Codigo Postal" icon="" hint=""
                        class="input input-xs input-info bg-white" />

                    <x-input wire:model="ciudad" label="Ciudad" icon="" hint=""
                        class="input input-xs input-info bg-white" />

                    <x-input wire:model="estado" label="Estado" icon="" hint=""
                        class="input input-xs input-info bg-white" />
                </div>
            </div>


            {{-- contacto --}}
            <div class="flex card h-42 p-6 shadow-xl bg-white mr-10 ml-10">
                <div class="flex align-middle items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#5EADFF" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                    </svg>
                    <h1 class="font-bold text-lg text-color-title-ds">Contacto</h1>
                </div>

                <div class="divider-norm"></div>

                <div class="font-regular text-color-title-ds text-xs grid grid-cols-2 gap-y-5 gap-x-10">
                    <x-input wire:model="telefono" label="Telefono" icon="" hint=""
                        class="input input-xs input-info bg-white" />

                    <x-input wire:model="email" label="Email" icon="" hint=""
                        class="input input-xs input-info bg-white" />
                </div>
            </div>
        </div>
        <div class="justify-self-end mr-10 mt-6">
            <x-button label="Agregar" icon="o-plus-circle" class=" btn-sm btn-info text-white rounded-3xl"
                type="submit" spinner='store' />
        </div>
    </x-form>

    {{-- Modal --}}
    <div x-data="{ showModal: @entangle('showModal') }" x-show="showModal" class="fixed inset-0 z-50 overflow-y-auto font-montserrat">
        <div class="flex items-center justify-center min-h-screen p-4 text-center">
            <div class="fixed inset-0 transition-opacity" x-show="showModal"
                x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <div x-show="showModal" x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">

                <div class="px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                        {{ $messageTitle }}
                    </h3>
                    <div class="mt-2">
                        <p class="text-sm text-gray-500">
                            {{ $messageContent }}
                        </p>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button @click="showModal = false" type="button"
                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                        {{ $buttonText }}
                    </button>
                </div>
            </div>
        </div>
    </div>


</div>
