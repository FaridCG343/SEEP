<div>
    <div class="flex justify-end h-screen font-montserrat">
        {{-- calendario --}}
        <div class="bg-white border-2 border-gray-150 w-3/6 h-11/12 rounded-3xl drop-shadow-sm overflow-hidden flex items-center justify-center m-5"> 
            <div>
                @livewire('App\Livewire\CalendarioCitas')
            </div>
        </div>
        {{-- table --}}
        <div class="bg-white border-2 border-gray-150 w-3/6 h-11/12 rounded-3xl drop-shadow-sm overflow-hidden flex items-center justify-center ml-0 m-5"> 
            <div class="overflow-x-auto">
                <table class="table">
                  <!-- head -->
                  <thead>
                    <tr>
                      <th></th>
                      <th>Name</th>
                      <th>Job</th>
                      <th>Favorite Color</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- row 1 -->
                    <tr class="bg-base-200">
                      <th>1</th>
                      <td>Cy Ganderton</td>
                      <td>Quality Control Specialist</td>
                      <td>Blue</td>
                    </tr>
                    <!-- row 2 -->
                    <tr>
                      <th>2</th>
                      <td>Hart Hagerty</td>
                      <td>Desktop Support Technician</td>
                      <td>Purple</td>
                    </tr>
                    <!-- row 3 -->
                    <tr>
                      <th>3</th>
                      <td>Brice Swyre</td>
                      <td>Tax Accountant</td>
                      <td>Red</td>
                    </tr>
                  </tbody>
                </table>
              </div>
        </div>
    </div>
</div>
