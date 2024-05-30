<!DOCTYPE html>
<html lang="en"  data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @livewireScripts
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</head>

<body>
    @if (auth()->check())
        {{-- background --}}
        <div class="bg-dashboard flex h-screen pl-5 bg-gray-100">
            <div class="dropdown-content absolute hidden bg-white min-w-[160px] shadow-lg z-50 rounded-3xl">
                <a href="#"
                    class="block font-semibold text-sm flex items-center w-full pl-5 py-1.5 transition-all rounded-2xl outline-none text-start">
                    Link 1
                </a>
                <a href="#"
                    class="block font-semibold text-sm flex items-center w-full pl-5 py-1.5 transition-all rounded-2xl outline-none text-start">
                    Link 2
                </a>
                <a href="#"
                    class="block font-semibold text-sm flex items-center w-full pl-5 py-1.5 transition-all rounded-2xl outline-none text-start">
                    Link 3
                </a>
            </div>
            {{-- navbar medico --}}
            <div
                class="bg-gradient-to-b from-gd-rectangle-1 via-gd-rectangle-2 to-gd-rectangle-3 w-2/12 h-11/12 rounded-3xl shadow-md flex-col self-start self-center items-start p-5 grid">
                {{-- logo y nombre --}}
                <div class="flex justify-center space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2.5em" height="2.5em" viewBox="0 0 24 24">
                        <path fill="#FDF9F5"
                            d="M18 18a1 1 0 0 0-1 1a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h5v3a3 3 0 0 0 3 3h3v1a1 1 0 0 0 2 0V8.94a1.31 1.31 0 0 0-.06-.27a.32.32 0 0 0 0-.09a1.07 1.07 0 0 0-.19-.28l-6-6a1.07 1.07 0 0 0-.28-.19h-.1a1.14 1.14 0 0 0-.3-.11H6a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3a1 1 0 0 0-1-1M13 5.41L15.59 8H14a1 1 0 0 1-1-1ZM20 14h-2.5a1 1 0 0 0-.71.29l-1.24 1.25l-2.8-3.2a1 1 0 0 0-1.46-.05L9.59 14H8a1 1 0 0 0 0 2h2a1 1 0 0 0 .71-.29L12 14.46l2.8 3.2a1 1 0 0 0 .72.34a1 1 0 0 0 .71-.29L17.91 16H20a1 1 0 0 0 0-2" />
                    </svg>
                    <h1 class="text-2xl font-black text-font-text-logo">SEEP</h1>
                </div>

                {{-- navbar --}}
                <div class="flex">
                    <nav>
                        <a role="button" href="{{ route('dashboard') }}"
                            class="font-semibold text-sm flex items-center w-full pl-5 py-1.5 transition-all rounded-2xl outline-none text-start hover:bg-font-text-logo hover:bg-opacity-80 md:text-font-text-logo md:hover:text-text-hover">
                            <div class="grid mr-2 place-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 256 256">
                                    <path fill="currentColor"
                                        d="m222.14 105.85l-80-80a20 20 0 0 0-28.28 0l-80 80A19.86 19.86 0 0 0 28 120v96a12 12 0 0 0 12 12h64a12 12 0 0 0 12-12v-52h24v52a12 12 0 0 0 12 12h64a12 12 0 0 0 12-12v-96a19.86 19.86 0 0 0-5.86-14.15M204 204h-40v-52a12 12 0 0 0-12-12h-48a12 12 0 0 0-12 12v52H52v-82.35l76-76l76 76Z" />
                                </svg>
                            </div>
                            Inicio
                        </a>

                        <a role="button" href="{{ route('new-patient') }}"
                            class="font-semibold text-sm flex items-center 
                            w-full pl-5 py-1.5 transition-all rounded-2xl 
                            outline-none text-start hover:bg-font-text-logo
                             hover:bg-opacity-80 md:text-font-text-logo
                              md:hover:text-text-hover">
                            <div class="grid mr-2 place-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 48 48">
                                    <g fill="none" stroke="currentColor" stroke-width="4">
                                        <circle cx="24" cy="11" r="7" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 41c0-8.837 8.059-16 18-16" />
                                        <circle cx="34" cy="34" r="9" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M33 31v4h4" />
                                    </g>
                                </svg>
                            </div>
                            Nuevo Paciente
                        </a>
                        <a role="button" href="{{ route('calendario-citas') }}"
                            class="font-semibold text-sm flex items-center w-full pl-5 py-1.5 transition-all rounded-2xl outline-none text-start hover:bg-font-text-logo hover:bg-opacity-80 md:text-font-text-logo md:hover:text-text-hover">
                            <div class="grid mr-2 place-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M4 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm12-4v4M8 3v4m-4 4h16m-9 4h1m0 0v3" />
                                </svg>
                            </div>
                            Calendario
                        </a>

                        <a role="button" href="{{ route('agendar-citas') }}"
                            class="font-semibold text-sm flex items-center w-full pl-5 py-1.5 transition-all rounded-2xl outline-none text-start hover:bg-font-text-logo hover:bg-opacity-80 md:text-font-text-logo md:hover:text-text-hover">
                            <div class="grid mr-2 place-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M4 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm12-4v4M8 3v4m-4 4h16m-9 4h1m0 0v3" />
                                </svg>
                            </div>
                            Agendar Cita
                        </a>

                        <!--if user admin-->
                        @if (Auth::user()->rol == 'Administrador')
                            <div class="dropdown inline-block w-full">
                                <button
                                    class="dropbtn font-semibold text-sm flex items-center w-full pl-5 py-1.5 transition-all rounded-2xl outline-none text-start hover:bg-font-text-logo hover:bg-opacity-80 md:text-font-text-logo md:hover:text-text-hover">
                                    <div class="grid mr-2 place-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 24 24">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M4 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm12-4v4M8 3v4m-4 4h16m-9 4h1m0 0v3" />
                                        </svg>
                                    </div>
                                    Altas
                                </button>
                                <div
                                    class="translate-x-20 dropdown-content hidden bg-white min-w-[180px] shadow-lg z-50 rounded-3xl">

                                    <div class="flex content-center">
                                        <a role="button" href="{{ route('form-departamentos') }}"
                                            class="block font-semibold text-sm flex items-center w-full transition-all rounded-2xl outline-none text-start">
                                            <div class="inline-block mr-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                    viewBox="0 0 16 16">
                                                    <g fill="#2AA8FF">
                                                        <path
                                                            d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                                                        <path
                                                            d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3z" />
                                                    </g>
                                                </svg>
                                            </div>
                                            Departamento

                                        </a>
                                    </div>



                                    <div class="flex content-center">
                                        <a role="button" href="{{ route('form-instituciones-medicas') }}"
                                            class="block font-semibold text-sm items-center w-full pl-5 py-1.5 transition-all rounded-2xl outline-none text-start">
                                            <div class="inline-block mr-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                    viewBox="0 0 24 24">
                                                    <path fill="#2AA8FF"
                                                        d="M12 2C8.14 2 5 5.14 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.86-3.14-7-7-7m4 8h-3v3h-2v-3H8V8h3V5h2v3h3z" />
                                                </svg>
                                            </div>
                                            Institución Médica
                                        </a>
                                    </div>



                                    <div class="flex content-center">
                                        <a role="button" href="{{ route('form-usuarios') }}"
                                            class="block font-semibold text-sm items-center w-full transition-all rounded-2xl outline-none text-start hover:bg-font-text-logo hover:bg-opacity-80 md:text-font-text-logo md:hover:text-text-hover">
                                            <div class="inline-block mr-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                    viewBox="0 0 24 24">
                                                    <path fill="#2AA8FF"
                                                        d="M16.5 13c-1.2 0-3.07.34-4.5 1c-1.43-.67-3.3-1-4.5-1C5.33 13 1 14.08 1 16.25V19h22v-2.75c0-2.17-4.33-3.25-6.5-3.25m-4 4.5h-10v-1.25c0-.54 2.56-1.75 5-1.75s5 1.21 5 1.75zm9 0H14v-1.25c0-.46-.2-.86-.52-1.22c.88-.3 1.96-.53 3.02-.53c2.44 0 5 1.21 5 1.75zM7.5 12c1.93 0 3.5-1.57 3.5-3.5S9.43 5 7.5 5S4 6.57 4 8.5S5.57 12 7.5 12m0-5.5c1.1 0 2 .9 2 2s-.9 2-2 2s-2-.9-2-2s.9-2 2-2m9 5.5c1.93 0 3.5-1.57 3.5-3.5S18.43 5 16.5 5S13 6.57 13 8.5s1.57 3.5 3.5 3.5m0-5.5c1.1 0 2 .9 2 2s-.9 2-2 2s-2-.9-2-2s.9-2 2-2" />
                                                </svg>
                                            </div>
                                            Registrar usuario
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif


                        <hr class="my-2 border-blue-gray-50" />

                        <a role="button"
                            class="font-semibold text-sm flex items-center w-full pl-5 py-1.5 transition-all rounded-2xl         outline-none text-start hover:bg-font-text-logo hover:bg-opacity-80 md:text-font-text-logo md:hover:text-text-hover">
                            <div class="grid mr-2 place-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 24 24">
                                    <g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd">
                                        <path d="M16 9a4 4 0 1 1-8 0a4 4 0 0 1 8 0m-2 0a2 2 0 1 1-4 0a2 2 0 0 1 4 0" />
                                        <path
                                            d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11s11-4.925 11-11S18.075 1 12 1M3 12c0 2.09.713 4.014 1.908 5.542A8.986 8.986 0 0 1 12.065 14a8.984 8.984 0 0 1 7.092 3.458A9 9 0 1 0 3 12m9 9a8.963 8.963 0 0 1-5.672-2.012A6.992 6.992 0 0 1 12.065 16a6.991 6.991 0 0 1 5.689 2.92A8.964 8.964 0 0 1 12 21" />
                                    </g>
                                </svg>
                            </div>
                            Perfil
                        </a>
                        <a role="button"
                            class="font-semibold text-sm flex items-center w-full pl-5 py-1.5 transition-all rounded-2xl         outline-none text-start hover:bg-font-text-logo hover:bg-opacity-80 md:text-font-text-logo md:hover:text-text-hover">
                            <div class="grid mr-2 place-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="m9.25 22l-.4-3.2q-.325-.125-.612-.3t-.563-.375L4.7 19.375l-2.75-4.75l2.575-1.95Q4.5 12.5 4.5 12.338v-.675q0-.163.025-.338L1.95 9.375l2.75-4.75l2.975 1.25q.275-.2.575-.375t.6-.3l.4-3.2h5.5l.4 3.2q.325.125.613.3t.562.375l2.975-1.25l2.75 4.75l-2.575 1.95q.025.175.025.338v.674q0 .163-.05.338l2.575 1.95l-2.75 4.75l-2.95-1.25q-.275.2-.575.375t-.6.3l-.4 3.2zM11 20h1.975l.35-2.65q.775-.2 1.438-.587t1.212-.938l2.475 1.025l.975-1.7l-2.15-1.625q.125-.35.175-.737T17.5 12t-.05-.787t-.175-.738l2.15-1.625l-.975-1.7l-2.475 1.05q-.55-.575-1.212-.962t-1.438-.588L13 4h-1.975l-.35 2.65q-.775.2-1.437.588t-1.213.937L5.55 7.15l-.975 1.7l2.15 1.6q-.125.375-.175.75t-.05.8q0 .4.05.775t.175.75l-2.15 1.625l.975 1.7l2.475-1.05q.55.575 1.213.963t1.437.587zm1.05-4.5q1.45 0 2.475-1.025T15.55 12t-1.025-2.475T12.05 8.5q-1.475 0-2.488 1.025T8.55 12t1.013 2.475T12.05 15.5M12 12" />
                                </svg>
                            </div>
                            Configuracion
                        </a>
                        <a role="button" href="{{ route('signout') }}"
                            class="font-semibold text-sm flex items-center w-full pl-5 py-1.5 transition-all rounded-2xl outline-none text-start hover:bg-font-text-logo hover:bg-opacity-80 md:text-font-text-logo md:hover:text-text-hover">
                            <div class="grid mr-2 place-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h7v2H5v14h7v2zm11-4l-1.375-1.45l2.55-2.55H9v-2h8.175l-2.55-2.55L16 7l5 5z" />
                                </svg>
                            </div>
                            Cerrar Sesion
                        </a>
                    </nav>
                </div>



                <div class="bg-white rounded-2x p-2 flex items-center self-end gap-2 rounded-2xl shadow-lg">
                    <img src="https://img.freepik.com/free-vector/user-blue-gradient_78370-4692.jpg?w=740&t=st=1716740217~exp=1716740817~hmac=ec8a703f3bb71545019facac85ea4f7c0ad4593962f93e038c7219a3866fe62d"
                        alt="avatar"
                        class="inline-block relative object-cover object-center !rounded-full w-12 h-12 border-2 border-blue-300 p-0.5" />
                    <h6 class="block text-xs text-gray-900 antialiased font-semibold leading-relaxed tracking-normal">
                        {{ Auth::user()->nombre }} {{ Auth::user()->apellido_paterno }}
                    </h6>
                </div>


            </div>


            <div class="container">
                <div class="flex justify-center h-screen">
                    <div
                        class="bg-gray-50 border-2 border-gray-150 w-11/12 h-11/12 rounded-3xl drop-shadow-sm overflow-hidden items-center justify-center ml-0 self-center flex">
                        {{ $slot }}
                    </div>
                </div>
            </div>


        </div>
    @else
        <div class="container">
            {{ $slot }}
        </div>
    @endif
    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('error', (message) => {
                message = message.message;
                Swal.fire({
                    title: 'Error!',
                    text: message,
                    icon: 'error',
                    confirmButtonText: 'Cool'
                });
            });

            Livewire.on('info', (message) => {
                message = message.message;
                console.log(message);
                Swal.fire({
                    title: 'Exito!',
                    text: message,
                    icon: 'info',
                    confirmButtonText: 'Cool'
                });
            });
        });
    </script>

</body>

</html>
