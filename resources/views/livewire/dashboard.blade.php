
<div>
    <div class="font-montserrat overflow-x-autoc mb-4 flex-col">
        <x-table :headers="$headers" :rows="$pacientes" class="custom-table"/>
        <div class="flex-row justify-center mt-3">
            @if (count($pacientes)) 
            {{$pacientes -> links('livewire-pagination-links')}}
            @endif
        </div>   
    </div>
</div>
