
<div class="h-full w-full flex flex-col justify-center">
        
    <div class="h-full pt-5 grid grid-cols-2 items-center gap-2 justify-between">
        @livewire('App\livewire\WelcomeMessageHome')
        @livewire('App\Livewire\CalendarHome')   
    </div>
    


    <div class="card h-42 shadow-xl bg-white mr-10 ml-10 p-3 mb-5">
        <div class="font-montserrat flex-col bg-white">
            <x-table :headers="$headers" :rows="$pacientes" class="custom-table"/>
            <div class="flex-row justify-self-center">
                @if (count($pacientes)) 
                {{$pacientes -> links('livewire-pagination-links')}}
                @endif
            </div>   
        </div>
    </div>
</div>

