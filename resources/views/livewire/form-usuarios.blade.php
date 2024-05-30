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
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><g fill="none" stroke="#2AA8FF" stroke-width="1.5"><circle cx="9" cy="9" r="2"/><path d="M13 15c0 1.105 0 2-4 2s-4-.895-4-2s1.79-2 4-2s4 .895 4 2Z"/><path stroke-linecap="round" d="M22 12c0 3.771 0 5.657-1.172 6.828C19.657 20 17.771 20 14 20h-4c-3.771 0-5.657 0-6.828-1.172C2 17.657 2 15.771 2 12c0-3.771 0-5.657 1.172-6.828C4.343 4 6.229 4 10 4h4c3.771 0 5.657 0 6.828 1.172c.47.47.751 1.054.92 1.828M19 12h-4m4-3h-5m5 6h-3"/></g></svg>
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
        </div>

        <div class="flex card h-42 p-6 shadow-xl bg-white mr-10 ml-10">
            <div class="flex align-middle items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><g fill="none" stroke="#2AA8FF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" color="#2AA8FF"><path d="M19 20.5c.425-.191.79-.439 1.109-.76c1.391-1.402 1.391-3.658 1.391-8.17c0-4.511 0-6.767-1.391-8.168C18.717 2 16.479 2 12 2C7.522 2 5.282 2 3.891 3.402S2.5 7.059 2.5 11.57s0 6.767 1.391 8.169c.32.321.684.569 1.109.76M2.5 8.5h19M7 5.5h.009M11 5.5h.009"/><path d="M10.26 16.378c-1.08 0-1.543.78-1.663 1.26c-.12.479-.12 2.218-.048 2.938c.24.899.84 1.27 1.428 1.39c.54.049 2.82.03 3.48.03c.96.019 1.68-.341 1.98-1.42c.06-.36.12-2.34-.03-2.939c-.318-.96-1.047-1.259-1.647-1.259m-3.5 0h3.5m-3.5 0c0-.06-.002-.826 0-1.26c0-.398-.034-.78.156-1.13c.71-1.413 2.75-1.27 3.254.17c.087.237.093.612.09.96c-.003.442 0 1.26 0 1.26"/></g></svg>
                <h1 class="font-bold text-lg text-color-title-ds">Seguridad</h1>
            </div>

            <div class="divider-norm"></div>

            <div class="font-regular text-color-title-ds text-xs grid grid-cols-2 gap-y-5 gap-x-10">
                <x-input wire:model="email" label="Email" icon="" hint=""
                    class="input input-xs input-info bg-white" />

                <x-input wire:model="password" label="Contraseña" icon="" hint=""
                    class="input input-xs input-info bg-white" />
            </div>
        </div>

        {{-- rol card --}}

        <div class="flex pl-10 pr-10 space-x-4">
            <div class="card w-1/4 p-6 shadow-xl bg-white">
                <div class="flex align-middle items-center gap-2 flex-wrap content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="#2AA8FF" fill-rule="evenodd" d="M20 4H4a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1M4 2a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3zm2 5h2v2H6zm5 0a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2zm-3 4H6v2h2zm2 1a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2h-6a1 1 0 0 1-1-1m-2 3H6v2h2zm2 1a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2h-6a1 1 0 0 1-1-1" clip-rule="evenodd"/></svg>           
                    <h1 class="font-bold text-lg text-color-title-ds">Rol</h1>
                </div>
    
                <div class="divider-norm"></div>
    
                <div class="font-regular text-color-title-ds text-xs">
                    <x-select wire:model="rol" label="Rol" :options="$rols"
                            class="select select-xs select-info bg-white" />
                </div>
            </div>
    
            <div class="card w-1/4 p-6 shadow-xl bg-white">
                <div class="flex align-middle items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 48 48"><defs><mask id="ipTBuildingFour0"><g fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"><path fill="#555" fill-rule="evenodd" d="m17 14l27 10v20H17z" clip-rule="evenodd"/><path d="M17 14L4 24v20h13m18 0V32l-9-3v15m18 0H17"/></g></mask></defs><path fill="#2AA8FF" d="M0 0h48v48H0z" mask="url(#ipTBuildingFour0)"/></svg>             
                    <h1 class="font-bold text-lg text-color-title-ds">Instituciones</h1>
                </div>
                    
                <div class="divider-norm"></div>
    
                <div class="font-regular text-color-title-ds text-xs">
                    <x-select wire:model="rol" label="Instituciones" :options="$rols"
                            class="select select-xs select-info bg-white" />
                </div>
            </div>
        </div>
        
    </x-form>
</div>
