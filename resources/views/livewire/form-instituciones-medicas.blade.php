
<div class="w-full h-full font-montserrat p-5 design-over">
    <x-form wire:submit.prevent="registrarInstit">
        <div class="flex items-center justify-between gap-2 mt-2">
            <div class="flex gap-2 self-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <g fill="none" stroke="#2AA8FF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        color="#2AA8FF">
                        <path
                            d="M20 22v-3c0-2.828 0-4.243-.879-5.121C18.243 13 16.828 13 14 13l-2 2l-2-2c-2.828 0-4.243 0-5.121.879C4 14.757 4 16.172 4 19v3m12-9v5.5" />
                        <path
                            d="M8.5 13v4m0 0a2 2 0 0 1 2 2v1m-2-3a2 2 0 0 0-2 2v1m9-13.5v-1a3.5 3.5 0 1 0-7 0v1a3.5 3.5 0 1 0 7 0m1.25 12.75a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0" />
                    </g>
                </svg>
                <h1 class="font-extrabold text-xl text-color-title-ds">Registro de instituciones medicas</h1>
            </div>
        </div>
    
    
        <div class="divider-ps"></div>

        <div class="flex flex-col gap-y-8 justify-center">

             {{-- contacto --}}
             <div class="flex card h-44 p-6 shadow-xl bg-white mr-10 ml-10">
                <div class="flex align-middle items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#5EADFF" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                    </svg>
                    <h1 class="font-bold text-lg text-color-title-ds">Informacion General</h1>
                </div>

                <div class="divider-norm"></div>

                <div class="font-regular text-color-title-ds text-xs grid grid-cols-2 gap-y-5 gap-x-10">
                    <x-input wire:model="nombre" label="Nombre" icon="" hint=""
                        class="input input-xs input-info bg-white" />

                    <x-choices label="Tipo de institucion" wire:model="tipo" :options="$tipos" single
                        class="select select-xs select-info bg-white !text-xs" />
                </div>
            </div>





            {{-- direction card --}}
            <div class="flex card h-10/12 p-6 shadow-xl bg-white mr-10 ml-10">
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

                    <x-input wire:model="numero_exterior" label="Numero Exterior" icon="" hint=""
                        class="input input-xs input-info bg-white" />

                    <x-input wire:model="numero_interior" label="Numero Interior" icon="" hint="Opcional"
                        class="input input-xs input-info bg-white" />

                    <x-input wire:model="colonia" label="Colonia" icon="" hint=""
                        class="input input-xs input-info bg-white" />

                    <x-input wire:model="codigo_postal" label="Codigo Postal" icon="" hint=""
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

        <x-slot:actions>
            <div class="justify-self-end mr-10 mt-6">
                <x-button label="Registrar" icon="o-plus-circle" class=" btn-sm btn-info text-white rounded-3xl"
                type="submit" spinner='registrarInstit' />
            </div>  
        </x-slot:actions>
        
    </x-form> 
</div>
