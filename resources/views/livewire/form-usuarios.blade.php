<div class="w-full h-full font-montserrat p-5 design-over">
    <x-form wire:submit.prevent="store">
        <div class="flex items-center justify-between gap-2 mt-2">
            <div class="flex gap-2 self-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><g fill="none" stroke="#2AA8FF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" color="#2AA8FF"><path d="M20 22v-3c0-2.828 0-4.243-.879-5.121C18.243 13 16.828 13 14 13l-2 2l-2-2c-2.828 0-4.243 0-5.121.879C4 14.757 4 16.172 4 19v3m12-9v5.5"/><path d="M8.5 13v4m0 0a2 2 0 0 1 2 2v1m-2-3a2 2 0 0 0-2 2v1m9-13.5v-1a3.5 3.5 0 1 0-7 0v1a3.5 3.5 0 1 0 7 0m1.25 12.75a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0"/></g></svg>
                <h1 class="font-extrabold text-xl text-color-title-ds">Registrar Usuarios</h1>
            </div>
        </div>


        <div class="divider-ps"></div>

        <div class="flex flex-col gap-y-8 justify-center">
            {{-- personal info card --}}
            <div class=" flex card h-90 p-6 shadow-xl bg-white mr-10 ml-10">
                <div class="flex align-middle items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#5EADFF" class="w-4 h-4">
                        <path
                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                    </svg>
                    <h1 class="font-bold text-lg text-color-title-ds">Informacion Personal</h1>
                </div>

                <div class="divider-norm"></div>

                <div class="font-regular text-color-title-ds text-xs grid grid-cols-2 gap-y-5 gap-x-10">
                    <x-input wire:model="nombre" label="Nombre" icon="" hint=""
                        class="input input-xs input-info bg-white"/>
                    <x-input wire:model="apellido_paterno" label="Apellido Paterno" icon="" hint=""
                        class="input input-xs input-info bg-white"/>
                    <x-input wire:model="apellido_materno" label="Apellido Materno" icon="" hint="Opcional"
                        class="input input-xs input-info bg-white"/>
                </div>
            </div>
    </x-form>
</div>
