
<div class="h-full w-full flex flex-col justify-center pt-5">


        @livewire('App\Livewire\CalendarHome')


    <div class="card h-42 shadow-xl bg-white mr-10 ml-10 mb-5 p-3">
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

