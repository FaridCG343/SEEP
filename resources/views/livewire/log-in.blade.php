<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>

<body>
    {{-- Background --}}
    <div class="bg-blue-100 flex justify-center items-center h-screen font-montserrat">
        {{-- seccion principal --}}
        <div class="bg-white w-4/6 h-5/6 rounded-3xl shadow-md overflow-hidden flex">
            {{-- seccion derecha --}}
            <div class=" bg-blue-400 h-full w-2/5">
                {{-- en proceso.... --}}
            </div>
            {{-- seccion izquierda --}}
            <div class="bg-white h-full w-3/5 flex justify-center items-center">
                {{-- seccion central izquierda --}}
                <div class=" flex-col justify-center items-center h-5/6 w-3/5 content-around space-y-6">
                    {{-- logo y nombre --}}
                    <div class="flex justify-center items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="5em" height="5em" viewBox="0 0 24 24">
                            <!-- Definiciones del gradiente -->
                            <defs>
                                <linearGradient id="gradient1" x1="50%" y1="0%" x2="0%"
                                    y2="100%">
                                    <stop offset="0%" style="stop-color: #BFDFFF;" />
                                    <!-- from bottom -->
                                    <stop offset="50%" style="stop-color: #9ECDFB;" />
                                    <!-- middle color -->
                                    <stop offset="100%" style="stop-color: #5EADFF;" /> <!-- to top -->
                                </linearGradient>
                            </defs>
                            <!-- Uso del gradiente en el path -->
                            <path fill="url(#gradient1)"
                                d="M18 18a1 1 0 0 0-1 1a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h5v3a3 3 0 0 0 3 3h3v1a1 1 0 0 0 2 0V8.94a1.31 1.31 0 0 0-.06-.27a.32.32 0 0 0 0-.09a1.07 1.07 0 0 0-.19-.28l-6-6a1.07 1.07 0 0 0-.28-.19h-.1a1.14 1.14 0 0 0-.3-.11H6a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3a1 1 0 0 0-1-1M13 5.41L15.59 8H14a1 1 0 0 1-1-1ZM20 14h-2.5a1 1 0 0 0-.71.29l-1.24 1.25l-2.8-3.2a1 1 0 0 0-1.46-.05L9.59 14H8a1 1 0 0 0 0 2h2a1 1 0 0 0 .71-.29L12 14.46l2.8 3.2a1 1 0 0 0 .72.34a1 1 0 0 0 .71-.29L17.91 16H20a1 1 0 0 0 0-2" />
                        </svg>

                        <h1
                            class="text-6xl font-black bg-gradient-to-t from-custom-color-2 via-custom-color-1 to-custom-color-3 text-gradient">
                            SEEP</h1>
                    </div>
                    {{-- Log In Text --}}
                    <div class="flex justify-center text-2xl font-extrabold text-custom-color-2">
                        <h2>LOGIN</h2>
                    </div>
                    {{-- input --}}
                    <div class="relative w-full min-w-[200px] h-10">
                        <input wire:model="email" type="email"
                            class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-50 focus:border-custom-color-2"
                            placeholder=" " /><label
                            class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900 before:border-custom-color-2 peer-focus:before:!border-custom-color-2 after:border-blue-gray-200 peer-focus:after:!border-custom-color-2">Email
                        </label>
                    </div>
                    <div class="relative h-10 w-full min-w-[200px]">
                        <input type="password" wire:model="password"
                            class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-custom-color-2 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                            placeholder=" " />
                        <label
                            class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-custom-color-2 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-custom-color-2 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                            Password
                        </label>
                    </div>
                    {{-- Botton Log In --}}
                    <div class="flex justify-center mt-2">
                        <button wire:click="login"
                            class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-6 rounded-3xl bg-blue-400 text-white shadow-md shadow-blue-400/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                            type="button" data-ripple-light="true">
                            Log In</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
</body>

</html>
