<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>@yield('titulo')</title>
</head>

<body>


    <div x-cloak x-data="sidebar()" class="relative flex items-start ">
        <div class="fixed top-0 z-40 transition-all duration-300">
            <div class="flex justify-end">
                <button @click="sidebarOpen = !sidebarOpen"
                    :class="{ 'hover:bg-gray-300': !sidebarOpen, 'hover:bg-gray-700': sidebarOpen }"
                    class="w-8 p-1 mx-3 my-2 transition-all duration-300 rounded-full focus:outline-none">
                    <svg viewBox="0 0 20 20" class="w-6 h-6 fill-current"
                        :class="{ 'text-gray-600': !sidebarOpen, 'text-gray-300': sidebarOpen }">
                        <path x-show="!sidebarOpen" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="sidebarOpen" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div id="menubar" x-cloak wire:ignore :class="{ 'w-56': sidebarOpen, 'w-0': !sidebarOpen }"
            class="fixed top-0 bottom-0 left-0 z-30 block h-full min-h-screen overflow-x-hidden overflow-y-auto transition-all duration-300 ease-in-out shadow-lg w-30 ">

            <div class="flex flex-col items-stretch justify-between h-full">
                <div class="flex flex-col flex-shrink-0 w-full">
                    <div class="flex items-center justify-center px-8 py-3 text-center">
                        <a href="#"
                            class="text-lg leading-normal text-gray-200 focus:outline-none focus:ring">Digital.Eats</a>
                    </div>

                    <nav>
                        <div class="flex-grow overflow-x-hidden md:block md:overflow-y-auto"
                            :class="{ 'opacity-1': sidebarOpen, 'opacity-0': !sidebarOpen }">
                            <a class="flex items-center justify-start px-4 py-3 btn-neon" href="#">


                                <span class="mx-4">Dashboard</span>
                            </a>




                            <a class="flex items-center px-4 py-3 hover:bg-gray-800 focus:bg-gray-800 hover:text-gray-400 focus:outline-none focus:ring"
                                href="#">
                                <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M9,10h1a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Zm0,2a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM20,8.94a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.32.32,0,0,0-.09,0A.88.88,0,0,0,13.05,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V9S20,9,20,8.94ZM14,5.41,16.59,8H15a1,1,0,0,1-1-1ZM18,19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4h5V7a3,3,0,0,0,3,3h3Zm-3-3H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z" />
                                </svg>
                                <span class="mx-4">Pages</span>

                            </a>

                        </div>

                    </nav>

                </div>
                <div>
                    <a title="Logout" href="{{ route('logout') }}" class="block px-4 py-3"
                        onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                        <svg class="text-gray-400 fill-current w-7 h-7" fill-rule="evenodd" clip-rule="evenodd"
                            stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" aria-label="door-leave"
                            viewBox="0 0 32 32" title="door-leave">
                            <g>
                                <path
                                    d="M27.708,15.293c0.39,0.39 0.39,1.024 0,1.414l-4,4c-0.391,0.391 -1.024,0.391 -1.415,0c-0.39,-0.39 -0.39,-1.024 0,-1.414l2.293,-2.293l-11.586,0c-0.552,0 -1,-0.448 -1,-1c0,-0.552 0.448,-1 1,-1l11.586,0l-2.293,-2.293c-0.39,-0.39 -0.39,-1.024 0,-1.414c0.391,-0.391 1.024,-0.391 1.415,0l4,4Z">
                                </path>
                                <path
                                    d="M11.999,8c0.001,0 0.001,0 0.002,0c1.699,-0.001 2.859,0.045 3.77,0.25c0.005,0.001 0.01,0.002 0.015,0.003c0.789,0.173 1.103,0.409 1.291,0.638c0,0 0,0.001 0,0.001c0.231,0.282 0.498,0.834 0.679,2.043c0,0.001 0,0.002 0.001,0.003c0.007,0.048 0.014,0.097 0.021,0.147c0.072,0.516 0.501,0.915 1.022,0.915c0.584,0 1.049,-0.501 0.973,-1.08c-0.566,-4.332 -2.405,-4.92 -7.773,-4.92c-7,0 -8,1 -8,10c0,9 1,10 8,10c5.368,0 7.207,-0.588 7.773,-4.92c0.076,-0.579 -0.389,-1.08 -0.973,-1.08c-0.521,0 -0.95,0.399 -1.022,0.915c-0.007,0.05 -0.014,0.099 -0.021,0.147c-0.001,0.001 -0.001,0.002 -0.001,0.003c-0.181,1.209 -0.448,1.762 -0.679,2.044l0,0c-0.188,0.229 -0.502,0.465 -1.291,0.638c-0.005,0.001 -0.01,0.002 -0.015,0.003c-0.911,0.204 -2.071,0.25 -3.77,0.25c-0.001,0 -0.001,0 -0.002,0c-1.699,0 -2.859,-0.046 -3.77,-0.25c-0.005,-0.001 -0.01,-0.002 -0.015,-0.003c-0.789,-0.173 -1.103,-0.409 -1.291,-0.638l0,0c-0.231,-0.282 -0.498,-0.835 -0.679,-2.043c0,-0.001 0,-0.003 -0.001,-0.005c-0.189,-1.247 -0.243,-2.848 -0.243,-5.061c0,0 0,0 0,0c0,-2.213 0.054,-3.814 0.243,-5.061c0.001,-0.002 0.001,-0.004 0.001,-0.005c0.181,-1.208 0.448,-1.76 0.679,-2.042c0,0 0,-0.001 0,-0.001c0.188,-0.229 0.502,-0.465 1.291,-0.638c0.005,-0.001 0.01,-0.002 0.015,-0.003c0.911,-0.205 2.071,-0.251 3.77,-0.25Z">
                                </path>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>

            <script>
                function sidebar() {
                    return {
                        sidebarOpen: true,
                        sidebarProductMenuOpen: false,
                        openSidebar() {
                            this.sidebarOpen = true
                        },
                        closeSidebar() {
                            this.sidebarOpen = false
                        },
                        sidebarProductMenu() {
                            if (this.sidebarProductMenuOpen === true) {
                                this.sidebarProductMenuOpen = false
                                window.localStorage.setItem('sidebarProductMenuOpen', 'close');
                            } else {
                                this.sidebarProductMenuOpen = true
                                window.localStorage.setItem('sidebarProductMenuOpen', 'open');
                            }
                        },
                        checkSidebarProductMenu() {
                            if (window.localStorage.getItem('sidebarProductMenuOpen')) {
                                if (window.localStorage.getItem('sidebarProductMenuOpen') === 'open') {
                                    this.sidebarProductMenuOpen = true
                                } else {
                                    this.sidebarProductMenuOpen = false
                                    window.localStorage.setItem('sidebarProductMenuOpen', 'close');
                                }
                            }
                        },
                    }
                }
            </script>
        </div>

        <div :class="{ 'ml-56': sidebarOpen, 'ml-0': !sidebarOpen }"
            class="flex-col w-full min-h-screen ml-56 transition-all duration-300 md:flex md:flex-col ">
            <div>
                <nav class="flex gap-1">
                    <p>buscador</p>
                    <p>filtro</p>
                    <p>carrito</p>
                </nav>


                <div
                    class="flex-wrap p-10 grid grid-cols-[repeat(2,1fr)] grid-rows-[repeat(1,1fr)] gap-10  lg:grid-cols-[repeat(3,1fr)] ">
                    {{-- AQUI VA TODO EL CODIGO DE LA PAGINA --}}

                    @yield('contenido')
                </div>
            </div>

            <footer class="text-white cristal">
                <div class="w-full max-w-screen-xl p-4 mx-auto md:py-8">
                    <div class="sm:flex sm:items-center sm:justify-between">
                        <a href="https://flowbite.com/"
                            class="flex items-center mb-4 space-x-3 sm:mb-0 rtl:space-x-reverse">
                            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                            <span
                                class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Digital.Eats</span>
                        </a>
                        <ul
                            class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">

                            <a href="#" class="hover:underline">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                    <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a
                            href="https://flowbite.com/" class="hover:underline">Digital.Eats</a>. All Rights
                        Reserved.</span>
                </div>
            </footer>
        </div>



    </div>









    <script src="https://cdn.jsdelivr.net/npm/kutty@latest/dist/kutty.min.js"></script>
</body>

</html>

<style>
    * {
        padding: 0;
        margin: 0;
        color: black !important;
    }

    #fondo {
        background: url(public\asset\videos\fondo.mp4);

    }

    video {

        position: fixed;
        bottom: 0.1vh;
        z-index: -3;
    }

    body {
        overflow-x: hidden;
    }

    .btn-neon {
        position: relative;
        display: inline-block;
        padding: 15px 30px;
        color: #fff;
        letter-spacing: 4px;
        text-decoration: none;
        font-size: 24px;
        overflow: hidden;
        transition: 0.2s;
    }

    .btn-neon:hover {

        background: #a945c7;
        box-shadow: 0 0 10px #a945c7, 0 0 40px #a945c7, 0 0 1px #a945c7;

    }

    #menubar {
        background: linear-gradient(145deg, #F7FFFF, #ADB5C4);
        border-radius: 0px 50px 50px 0px;
        box-shadow: 9.91px 9.91px 15px #BFC7D9, -9.91px -9.91px 15px #E5EFFF;
        margin: 0.1vw
    }

    #menubar:hover {
        background: linear-gradient(145deg, #AFC2C4, #7B888A);

        box-shadow: 9.91px 9.91px 15px #889698, -9.91px -9.91px 15px #A2B4B6;
    }

    .cristal {
        background: linear-gradient(145deg, #F7FFFF, #ADB5C4);
        border-radius: 50px;
        box-shadow: 9.91px 9.91px 15px #BFC7D9, -9.91px -9.91px 15px #E5EFFF;
        margin: 0.1vw
    }

    .cristal:hover {
        background: linear-gradient(145deg, #AFC2C4, #7B888A);
        border-radius: 15%;
        box-shadow: 9.91px 9.91px 15px #889698, -9.91px -9.91px 15px #A2B4B6;
    }

    footer {
        margin: 0 1vw;
    }

    body {

        background: #D2DBEE;
    }

    .parentGrande {
        flex: 70%;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: repeat(1, 1fr);
        grid-column-gap: 5vw;
        grid-row-gap: 100px;
    }

    .parent {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(1, 1fr);
        grid-column-gap: 5vw;
        grid-row-gap: 100px;
    }
</style>
