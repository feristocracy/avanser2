@extends('layouts.public')

@section('title', 'Avanser - Servicios especializados en flotillas')

@section('description', 'Mantenimiento preventivo, correctivo y administración de flotillas con cobertura nacional.')

@section('content')

    <main class="min-h-screen bg-white">

    <div class="w-full xl:max-w-[70%] lg:max-w-[85%] md:max-w-[95%] mx-auto">

        {{-- Header --}}
        <header class="fixed top-0 left-0 z-50 w-full bg-slate-900 shadow-sm backdrop-blur mb-6">

            <div class="mx-auto flex max-w-7xl items-center justify-between px-6 md:px-20 py-4 md:py-0 relative">

                <!-- Hamburger Button Mobile -->
                <button id="mobile-menu-btn" class="md:hidden flex flex-col gap-1.5 p-2 focus:outline-none z-50">
                    <span class="block w-6 h-0.5 bg-slate-900 transition-transform duration-300 origin-top-left"></span>
                    <span class="block w-6 h-0.5 bg-slate-900 transition-opacity duration-300"></span>
                    <span class="block w-6 h-0.5 bg-slate-900 transition-transform duration-300 origin-bottom-left"></span>
                </button>

                <!-- Logo Desktop -->
                <a href="#" class="hidden md:inline-flex items-center py-2">
                    <img src="{{ asset('images/avanser/logowhite.png') }}"
                         alt="Avanser Centro de Servicio Automotriz"
                         class="h-22 w-auto">
                </a>

                <!-- Logo Mobile -->
                <a href="#" class="inline-flex items-center md:hidden">
                    <img src="{{ asset('images/avanser/logowhite.png') }}"
                         alt="Avanser Centro de Servicio Automotriz"
                         class="h-14 w-auto">
                </a>

                <!-- Nav Desktop -->
                <nav class="hidden items-center gap-8 text-sm font-title font-bold uppercase tracking-wide text-slate-200 md:flex">
                    <a href="#quienes-somos" class="hover:text-avanserRed hover:underline hover:underline-offset-6 hover:decoration-4 hover:decoration-avanserYellow">Quiénes somos</a>
                    <a href="#servicios" class="hover:text-avanserRed hover:underline hover:underline-offset-6 hover:decoration-4 hover:decoration-avanserYellow">Servicios</a>
                    <a href="#clientes" class="hover:text-avanserRed hover:underline hover:underline-offset-6 hover:decoration-4 hover:decoration-avanserYellow">Clientes</a>
                    <a href="#presencia" class="hover:text-avanserRed hover:underline hover:underline-offset-6 hover:decoration-4 hover:decoration-avanserYellow">Presencia</a>
                    <a href="#contacto" class="hover:text-avanserRed hover:underline hover:underline-offset-6 hover:decoration-4 hover:decoration-avanserYellow">Contacto</a>
                </nav>

                <!-- Botón Reservar Desktop -->
                <a href="#contacto"
                   class="hidden rounded bg-avanserRed px-5 py-3 text-xs font-title font-bold uppercase text-white shadow hover:bg-red-700 md:inline-flex">
                    Reservar ahora
                </a>

            </div>

            <!-- Mobile Menu Dropdown -->
            <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-slate-100 shadow-lg absolute w-full left-0 top-full">
                <nav class="flex flex-col text-sm font-title font-bold uppercase tracking-wide text-slate-700">
                    <a href="#quienes-somos" class="px-6 py-4 border-b border-slate-50 hover:bg-slate-50 hover:text-avanserRed mobile-link">Quiénes somos</a>
                    <a href="#servicios" class="px-6 py-4 border-b border-slate-50 hover:bg-slate-50 hover:text-avanserRed mobile-link">Servicios</a>
                    <a href="#clientes" class="px-6 py-4 border-b border-slate-50 hover:bg-slate-50 hover:text-avanserRed mobile-link">Clientes</a>
                    <a href="#presencia" class="px-6 py-4 border-b border-slate-50 hover:bg-slate-50 hover:text-avanserRed mobile-link">Presencia</a>
                    <a href="#contacto" class="px-6 py-4 border-b border-slate-50 hover:bg-slate-50 hover:text-avanserRed mobile-link">Contacto</a>
                    <a href="#contacto" class="px-6 py-4 bg-avanserRed text-white text-center mobile-link">Reservar ahora</a>
                </nav>
            </div>
        </header>

        {{-- Hero --}}
        <section class="relative flex min-h-[550px] md:min-h-[680px] items-center overflow-hidden pt-24 md:pt-24">

            <img src="{{ asset('images/avanser/hero2.png') }}"
                 alt="Flotilla de vehículos"
                 class="absolute inset-0 h-full w-full object-cover">

            <div class="absolute inset-0 bg-white/40 md:bg-white/35"></div>

            <div class="z-10 mx-auto w-full max-w-7xl px-6 md:px-20 pt-10">
                <div class="w-full h-full text-center md:text-left">

                    <p class="tracking-tight text-lg md:text-2xl font-title font-bold uppercase tracking-[0.25em] text-avanserYellow drop-shadow-[0_0_30px_rgba(255,255,255,0.8)]">
                        Ingeniería de precisión
                    </p>

                    <h1 class="mt-2 text-4xl font-title font-bold uppercase leading-tight text-slate-900 md:text-6xl drop-shadow-[0_0_10px_rgba(255,255,255,0.9)]">
                        Servicios especializados
                        <span class="block text-avanserRed drop-shadow-[0_0_10px_rgba(255,255,255,0.9)]">en flotillas</span>
                    </h1>

                    <p class="mt-4 md:mt-0 md:mr-0 max-w-full md:max-w-xl text-base md:text-lg font-text font-weight-bold leading-relaxed drop-shadow-[0_0_10px_rgba(255,255,255,0.9)]">
                        Mantenimiento preventivo, correctivo y administración de flotillas con cobertura nacional.
                    </p>

                    <div class="mt-8 h-2 w-24 bg-yellow-400 mx-auto md:ml-0"></div>

                    <a href="#contacto"
                       class="mt-10 mx-auto md:ml-auto md:mr-0 flex w-fit bg-red-600 px-10 py-4 text-sm font-title font-bold uppercase text-white shadow-lg transition hover:bg-red-700 justify-center md:justify-between rounded tracking-wide">
                        Agenda tu cita
                    </a>

                </div>
            </div>
        </section>

        {{-- Quiénes somos --}}

        <div class="flex flex-col md:flex-row items-center justify-center gap-6 md:gap-8 py-8 px-4 bg-white mt-4">
  
        <!-- Item 1: +10 años -->
        <div class="flex items-center gap-3">
            <!-- Ícono Estrella/Destello -->
            <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2L14.5 9.5L22 12L14.5 14.5L12 22L9.5 14.5L2 12L9.5 9.5L12 2Z"/>
            </svg>
            <div class="flex flex-col">
            <span class="text-2xl font-extrabold text-gray-900 leading-none">+10 años</span>
            <span class="text-sm font-medium text-gray-400 mt-1">de experiencia*</span>
            </div>
        </div>

        <!-- Separador -->
        <div class="hidden md:block w-px h-12 bg-gray-200"></div>

        <!-- Item 2: +20 estados -->
        <div class="flex items-center gap-3">
            <!-- Ícono Mira/Objetivo -->
            <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="9"/>
            <path d="M12 3v4M12 17v4M3 12h4M17 12h4"/>
            </svg>
            <div class="flex flex-col">
            <span class="text-2xl font-extrabold text-gray-900 leading-none">+20 estados</span>
            <span class="text-sm font-medium text-gray-400 mt-1">con presencia*</span>
            </div>
        </div>

        <!-- Separador -->
        <div class="hidden md:block w-px h-12 bg-gray-200"></div>

        <!-- Item 3: Red de apoyo -->
        <div class="flex items-center gap-3">
            <!-- Ícono Handshake -->
            <svg class="w-8 h-8 text-yellow-500" fill="currentColor" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
            <path d="M323.4 85.2l-96.8 78.4c-16.1 13-19.2 36.4-7 53.1c12.9 17.8 38 21.3 55.3 7.8l99.3-77.2c7-5.4 17-4.2 22.5 2.8s4.2 17-2.8 22.5l-20.9 16.2L512 316.8V128h-.7l-3.9-2.5L434.8 79c-15.3-9.8-33.2-15-51.4-15c-21.8 0-43 7.5-60 21.2zm22.8 124.4l-51.7 40.2C263 274.4 217.3 268 193.7 235.6c-22.2-30.5-16.6-73.1 12.7-96.8l83.2-67.3c-11.6-4.9-24.1-7.4-36.8-7.4C234 64 215.7 69.6 200 80l-72 48V352h28.2l91.4 83.4c19.6 17.9 49.9 16.5 67.8-3.1c5.5-6.1 9.2-13.2 10.7-20.6l17.9 15.8c19.6 17.9 49.9 16.6 67.8-3.1c4.5-4.9 7.8-10.6 9.9-16.5c19.4 13 45.8 10.3 62.1-7.5c17.9-19.5 16.6-49.9-2.9-67.8l-134.2-123z"/>
            </svg>
            <div class="flex flex-col">
            <span class="text-2xl font-extrabold text-gray-900 leading-none">Red de apoyo</span>
            <span class="text-sm font-medium text-gray-400 mt-1">proveedores especializados</span>
            </div>
        </div>

        <!-- Separador -->
        <div class="hidden md:block w-px h-12 bg-gray-200"></div>

        <!-- Item 4: Atención -->
        <div class="flex items-center gap-3">
            <!-- Ícono Engrane -->
            <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            <div class="flex flex-col">
            <span class="text-2xl font-extrabold text-gray-900 leading-none">Atención</span>
            <span class="text-sm font-medium text-gray-400 mt-1">enfocada en flotillas</span>
            </div>
        </div>

        </div>
        <section id="quienes-somos" class="mx-auto grid max-w-7xl gap-8 px-6 py-12 md:py-12 lg:grid-cols-2">

        

            <div class="overflow-hidden order-2 lg:order-1">
                <img src="{{ asset('images/avanser/quienessomos.png') }}"
                     alt="Mecánico dando servicio a vehículo"
                     class="w-full rounded-sm object-cover transition-transform duration-500 ease-in-out hover:scale-105">
            </div>

            <div class="flex items-center border-l-4 lg:border-l-0 lg:border-r-4 border-yellow-400 bg-white p-6 md:p-2 rounded-sm order-1 lg:order-2">
                <div class="mx-auto max-w-lg text-left">

                    <div class="flex items-start gap-4">
                        <div class="flex flex-col items-start pb-2 bg-white font-sans">
                        <!-- Subtítulo superior -->
                        <span class="text-red-600 text-sm md:text-base font-bold tracking-widest uppercase mb-4">
                            Quienes Somos
                        </span>
                        
                        <!-- Título principal -->
                        <h2 class="flex flex-col text-5xl md:text-6xl lg:text-5xl font-black uppercase leading-none tracking-tight">
                            <span class="text-gray-900">Más que</span>
                            <span class="text-gray-900">mantenimiento,</span>
                            <span class="text-red-600 mt-1 md:mt-2">tu aliado</span>
                            <span class="text-red-600">estratégico.</span>
                        </h2>
                        </div>
                    </div>

                    <p class="mt-6 md:mt-2 text-base md:text-lg leading-relaxed text-slate-700 font-text">
                        Somos un equipo de asesores especializados en mantenimiento de flotillas a diésel y gasolina, <b>teniendo presencia en varios estados del país.</b> Nos enfocamos en la seguridad, continuidad operativa y cuidado de cada vehículo.
                        Tenemos presencia en varios estados del país.
                    </p>

                    <a href="#contacto"
                       class="mt-8 md:mt-10 inline-flex bg-red-600 px-8 py-3 text-sm md:text-base font-title font-bold uppercase text-white transition hover:bg-red-700 rounded">
                        Conócenos
                    </a>

                </div>
            </div>

        </section>

        {{-- Servicios --}}
        <section id="servicios" class="bg-slate-900 px-6 py-12 md:py-16">
            <div class="mx-auto max-w-7xl text-center">

                <h2 class="text-3xl md:text-4xl font-black uppercase text-slate-100 font-title">
                    Nuestros servicios
                </h2>

                <div class="mx-auto mt-5 h-1 w-24 bg-yellow-400"></div>

                <p class="mt-4 text-sm md:text-base text-slate-200 font-text max-w-[80%] md:max-w-[60%] mx-auto">
                    Un portafolio de servicios diseñado para mantener tus unidades en condiciones óptimas y reducir interrupciones operativas.
                </p>

                <div class="mt-10 md:mt-14 grid gap-8 md:grid-cols-3">

                    <div class="rounded bg-white p-8 md:p-10 shadow-lg">
                        <img src="{{ asset('images/avanser/motor.png') }}"
                             alt="Servicio preventivo"
                             class="h-16 md:h-35 w-auto mx-auto">
                        <h3 class="mt-6 text-base md:text-lg font-title font-bold uppercase">Servicio preventivo</h3>
                        <p class="mt-4 text-sm md:text-base text-slate-600 font-text max-w-[80%] md:max-w-[60%] mx-auto">
                            Servicios programados para cuidar el rendimiento y la confiabilidad de las unidades.
                        </p>
                        <a href="#" data-modal-target="modal-preventivo" class="mt-6 inline-flex items-center gap-2 rounded bg-red-600 px-6 py-2.5 text-sm font-title font-bold uppercase tracking-wide text-white shadow-md transition hover:bg-red-700 hover:shadow-lg">
                            Ver más
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>

                    <div class="rounded bg-white p-8 md:p-10 shadow-lg">
                        <img src="{{ asset('images/avanser/cables.png') }}"
                             alt="Sistema correctivo"
                             class="h-16 md:h-35 w-auto mx-auto">
                        <h3 class="mt-6 text-base md:text-lg font-title font-bold uppercase">Sistema correctivo</h3>
                        <p class="mt-4 text-sm md:text-base text-slate-600 font-text max-w-[80%] md:max-w-[60%] mx-auto">
                            Diagnóstico y reparación de componentes mecánicos y electrónicos.
                        </p>
                        <a href="#" data-modal-target="modal-correctivo" class="mt-6 inline-flex items-center gap-2 rounded bg-red-600 px-6 py-2.5 text-sm font-title font-bold uppercase tracking-wide text-white shadow-md transition hover:bg-red-700 hover:shadow-lg">
                            Ver más
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>

                    <div class="rounded bg-white p-8 md:p-10 shadow-lg">
                        <img src="{{ asset('images/avanser/llanta.png') }}"
                             alt="Neumáticos"
                             class="h-16 md:h-35 w-auto mx-auto">
                        <h3 class="mt-6 text-base md:text-lg font-title font-bold uppercase">Neumáticos</h3>
                        <p class="mt-4 text-sm md:text-base text-slate-600 font-text max-w-[80%] md:max-w-[60%] mx-auto">
                            Atención especializada para el cuidado de las llantas.
                        </p>
                        <a href="#" data-modal-target="modal-neumaticos" class="mt-6 inline-flex items-center gap-2 rounded bg-red-600 px-6 py-2.5 text-sm font-title font-bold uppercase tracking-wide text-white shadow-md transition hover:bg-red-700 hover:shadow-lg">
                            Ver más
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>

                </div>

                <a href="#contacto"
                   class="mt-12 md:mt-15 inline-flex bg-red-600 px-10 py-4 text-sm md:text-base font-title font-bold uppercase text-white transition hover:bg-red-700 rounded">
                    Más servicios
                </a>

                {{-- ¿Por qué elegir Avanser? --}}
                <div class="mt-14 md:mt-20">
                    <h3 class="text-3xl md:text-4xl font-black uppercase text-slate-100 font-title">
                        ¿Por qué elegir Avanser?
                    </h3>

                    <div class="mx-auto mt-5 h-1 w-24 bg-yellow-400"></div>

                    <p class="mt-4 text-base md:text-lg text-redBright font-title font-bold uppercase tracking-wide">
                        Tu aliado estratégico en el camino
                    </p>

                    <div class="mt-10 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">

                        <div class="rounded bg-white p-6 md:p-8 shadow-lg border-t-4 border-yellow-400">
                            <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-red-600/10">
                                <svg class="h-7 w-7 text-red-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                                </svg>
                            </div>
                            <h4 class="mt-5 text-sm md:text-base font-title font-bold uppercase text-slate-900">Experiencia</h4>
                            <p class="mt-3 text-sm text-slate-600 font-text">
                                Conocimiento especializado en el mantenimiento de flotillas.
                            </p>
                        </div>

                        <div class="rounded bg-white p-6 md:p-8 shadow-lg border-t-4 border-yellow-400">
                            <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-red-600/10">
                                <svg class="h-7 w-7 text-red-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                                </svg>
                            </div>
                            <h4 class="mt-5 text-sm md:text-base font-title font-bold uppercase text-slate-900">Seguridad</h4>
                            <p class="mt-3 text-sm text-slate-600 font-text">
                                Servicios orientados al buen estado de cada vehículo.
                            </p>
                        </div>

                        <div class="rounded bg-white p-6 md:p-8 shadow-lg border-t-4 border-yellow-400">
                            <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-red-600/10">
                                <svg class="h-7 w-7 text-red-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12c0-1.232.046-2.453.138-3.662a4.006 4.006 0 013.7-3.7 48.678 48.678 0 017.324 0 4.006 4.006 0 013.7 3.7c.017.22.032.441.046.662M4.5 12l-3-3m3 3l3-3m12 3c0 1.232-.046 2.453-.138 3.662a4.006 4.006 0 01-3.7 3.7 48.657 48.657 0 01-7.324 0 4.006 4.006 0 01-3.7-3.7c-.017-.22-.032-.441-.046-.662M19.5 12l-3 3m3-3l3 3"/>
                                </svg>
                            </div>
                            <h4 class="mt-5 text-sm md:text-base font-title font-bold uppercase text-slate-900">Continuidad</h4>
                            <p class="mt-3 text-sm text-slate-600 font-text">
                                Atención para prevenir fallas e interrupciones.
                            </p>
                        </div>

                        <div class="rounded bg-white p-6 md:p-8 shadow-lg border-t-4 border-yellow-400">
                            <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-red-600/10">
                                <svg class="h-7 w-7 text-red-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/>
                                </svg>
                            </div>
                            <h4 class="mt-5 text-sm md:text-base font-title font-bold uppercase text-slate-900">Atención cercana</h4>
                            <p class="mt-3 text-sm text-slate-600 font-text">
                                Soluciones adaptadas a las necesidades de cada empresa.
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        {{-- Clientes --}}
        <section id="clientes" class="px-6 py-12 md:py-16">
            <div class="mx-auto grid max-w-7xl gap-8 rounded-lg bg-white p-6 md:p-15 shadow-lg lg:grid-cols-2 border-t-4 lg:border-t-0 lg:border-l-4 border-avanserRed">

                <div class="text-center lg:text-left">
                    <h2 class="text-3xl md:text-4xl font-bold uppercase text-slate-900 font-title">
                        Principales clientes
                    </h2>

                    <p class="mt-4 md:mt-6 text-base md:text-lg text-slate-600 font-text">
                        Estas son algunas de las empresas que confían en nosotros.
                    </p>

                    <div class="mt-6 md:mt-8 grid gap-4 text-sm font-title font-bold uppercase text-slate-700 sm:grid-cols-2 text-left">
                        <x-check-item>Profesionalismo</x-check-item>
                        <x-check-item>Resultados reales</x-check-item>
                        <x-check-item>Atención personalizada</x-check-item>
                        <x-check-item>Garantía</x-check-item>
                    </div>
                </div>

                <style>
                    @keyframes scroll-logos {
                        0% { transform: translateX(0); }
                        100% { transform: translateX(-50%); }
                    }
                    .animate-scroll-logos {
                        animation: scroll-logos 25s linear infinite;
                    }
                    .animate-scroll-logos:hover {
                        animation-play-state: paused;
                    }
                </style>
                <div class="relative w-full overflow-hidden py-4 mt-6 lg:mt-0">
                    <!-- Gradientes para suavizar la entrada y salida -->
                    <div class="pointer-events-none absolute inset-0 z-10 w-full bg-gradient-to-r from-white via-transparent to-white"></div>
                    
                    <div class="flex w-max items-center gap-6 md:gap-10 animate-scroll-logos">
                        <!-- Set 1 -->
                        <img src="{{ asset('images/marcas/ariza.png') }}" alt="Ariza" class="max-h-20 md:max-h-30 max-w-32 md:max-w-40 object-contain">
                        <img src="{{ asset('images/marcas/bbva.jpeg') }}" alt="BBVA" class="max-h-20 md:max-h-30 max-w-32 md:max-w-40 object-contain">
                        <img src="{{ asset('images/marcas/edenred.png') }}" alt="Edenred" class="max-h-20 md:max-h-30 max-w-32 md:max-w-40 object-contain">
                        <img src="{{ asset('images/marcas/jhleasing.png') }}" alt="JH Leasing" class="max-h-20 md:max-h-30 max-w-32 md:max-w-40 object-contain">
                        <img src="{{ asset('images/marcas/leaseandfleet.png') }}" alt="Lease and Fleet" class="max-h-20 md:max-h-30 max-w-32 md:max-w-40 object-contain">
                        <img src="{{ asset('images/marcas/pepsico.jpeg') }}" alt="Pepsico" class="max-h-20 md:max-h-30 max-w-32 md:max-w-40 object-contain">
                        
                        <!-- Set 2 (Duplicado para crear el ciclo infinito) -->
                        <img src="{{ asset('images/marcas/ariza.png') }}" alt="Ariza" class="max-h-20 md:max-h-30 max-w-32 md:max-w-40 object-contain">
                        <img src="{{ asset('images/marcas/bbva.jpeg') }}" alt="BBVA" class="max-h-20 md:max-h-30 max-w-32 md:max-w-40 object-contain">
                        <img src="{{ asset('images/marcas/edenred.png') }}" alt="Edenred" class="max-h-20 md:max-h-30 max-w-32 md:max-w-40 object-contain">
                        <img src="{{ asset('images/marcas/jhleasing.png') }}" alt="JH Leasing" class="max-h-20 md:max-h-30 max-w-32 md:max-w-40 object-contain">
                        <img src="{{ asset('images/marcas/leaseandfleet.png') }}" alt="Lease and Fleet" class="max-h-20 md:max-h-30 max-w-32 md:max-w-40 object-contain">
                        <img src="{{ asset('images/marcas/pepsico.jpeg') }}" alt="Pepsico" class="max-h-20 md:max-h-30 max-w-32 md:max-w-40 object-contain">
                    </div>
                </div>

            </div>
        </section>

        {{-- CTA --}}
        <section class="bg-yellow-50 px-6 py-12 md:py-16 text-center">
            <h2 class="text-3xl md:text-4xl font-bold uppercase text-slate-900 font-title">
                ¿Listo para encender el <span class="text-avanserYellow">rendimiento?</span>
            </h2>

            <p class="mx-auto mt-4 md:mt-5 max-w-3xl text-base md:text-lg text-slate-700 font-text">
                Cupos mensuales limitados para consultas de ingeniería personalizadas y auditorías de rendimiento.
                Reserve su bahía de diagnóstico hoy.
            </p>

            <a href="#contacto"
               class="mt-8 md:mt-10 inline-flex items-center justify-center bg-yellow-400 px-8 md:px-12 py-3 md:py-4 text-sm md:text-base font-title font-bold uppercase text-slate-900 transition hover:bg-yellow-300 rounded">
                Agendar cita
                <img src="{{ asset('images/avanser/citaicon.svg') }}"
                             alt="Agendar cita"
                             class="h-4 md:h-5 ml-2">
            </a>
        </section>

        {{-- Presencia --}}
        <section id="presencia" class="px-6 py-12 md:py-16">

            <div class="mx-auto grid max-w-7xl gap-8 rounded-lg bg-slate-900 p-6 md:p-8 lg:grid-cols-2">

                <div class="lg:pl-12 text-center lg:text-left">
                    <h2 class="text-3xl md:text-4xl font-title font-black uppercase text-slate-200 lg:pt-10">
                        Presencia
                    </h2>

                    <div class="hidden lg:block w-47 h-1 bg-yellow-400 mt-4"></div>

                    <div class="mt-8 space-y-6 md:space-y-8 text-slate-300 text-left">
                        <div class="flex items-center gap-4">
                            <img src="{{ asset('images/avanser/ubicacionicon.svg') }}"
                                 alt="Ubicación Avanser Puebla"
                                 class="h-10 md:h-12 w-10 md:w-12 shrink-0">
                            <div class="font-text text-sm md:text-base">
                                <h3 class="font-black uppercase">Avanser Puebla</h3>
                                <p>Calle 18 sur 303, Barrio de Analco<br>72500, Puebla, Pue.</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <img src="{{ asset('images/avanser/telefonoicon.svg') }}"
                                 alt="Contacto directo"
                                 class="h-10 md:h-12 w-10 md:w-12 shrink-0">
                            <div class="font-text text-sm md:text-base">
                                <h3 class="font-black uppercase">Contacto directo</h3>
                                <p>+52 221 652 7226<br>avanser@gmail.com</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <img src="{{ asset('images/avanser/relojicon.svg') }}"
                                 alt="Horario de operaciones"
                                 class="h-10 md:h-12 w-10 md:w-12 shrink-0">
                            <div class="font-text text-sm md:text-base">
                                <h3 class="font-black uppercase">Horario de operaciones</h3>
                                <p>Lunes - Viernes: 8:30 - 17:30<br>Sábados: 8:30 - 14:00</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full h-[300px] md:h-[450px]">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.6021152011735!2d-98.19066458965496!3d19.037246682084938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc0f1e6ca4197%3A0xac71e899d65b2ae2!2sAvanser%20-%20Centro%20de%20Servicio%20Automotriz!5e0!3m2!1ses-419!2smx!4v1783983467869!5m2!1ses-419!2smx" class="w-full h-full border-0 rounded" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                </div>

            </div>

            <div class="relative mt-20 mx-auto grid max-w-7xl gap-8 items-center rounded-lg p-6 md:p-10 shadow-lg lg:grid-cols-[1fr_auto_1fr] bg-cover bg-center">

                <!-- 1. Capa de la imagen de fondo con transparencia (Ajusta opacity-30 a tu gusto) -->
                <div class="absolute inset-0 z-0 bg-cover bg-center opacity-20"
                    style="background-image: url('{{ asset('images/avanser/flotilla.jpeg') }}');">
                </div>

                <div class="relative z-10 text-center lg:text-right mr-4">
                    <h2 class="text-3xl md:text-4xl font-title font-black uppercase text-slate-900">
                        A nivel nacional
                    </h2>

                    <p class="mt-6 text-sm md:text-base text-slate-600 font-text">
                        Estamos presentes en más de 20 estados de la República Mexicana, brindando soluciones de mantenimiento para empresas con flotillas en diferentes regiones del país.
                    </p>

                    <a href="#contacto"
                       class="mt-8 inline-flex bg-red-600 px-10 py-4 text-sm md:text-base font-title font-bold uppercase text-white transition hover:bg-red-700 rounded shadow-md hover:shadow-lg">
                        Consultar cobertura
                    </a>
                </div>

                <div class="relative z-10 hidden lg:block w-1 h-35 bg-yellow-400"></div>

                <div class="relative z-10 flex justify-center">
                    <img src="{{ asset('images/avanser/mapamexico.png') }}"
                         alt="Cobertura a nivel nacional"
                         class="w-full max-w-md h-auto">
                </div>

            </div>
        </section>

        {{-- Contacto --}}
        <section id="contacto" class="px-6 py-12 md:py-16">
            <div class="mx-auto max-w-7xl">

                <div class="grid gap-8 lg:gap-10 lg:grid-cols-2 overflow-hidden bg-white rounded-lg shadow-sm">

                    <img src="{{ asset('images/avanser/contacto.png') }}"
                         alt="Taller Avanser"
                         class="w-full h-64 lg:h-full rounded-t-lg lg:rounded-l-lg lg:rounded-tr-none object-cover transition-transform duration-500 ease-in-out hover:scale-105">

                    <div class="p-6 md:p-8">
                        <h2 class="mb-6 md:mb-10 text-3xl md:text-4xl font-title font-black uppercase text-slate-900 text-center lg:text-left">
                        ¿Listo para trabajar con nosotros?
                        </h2>
                        <form class="space-y-4 md:space-y-5">
                            <h3 class="text-base md:text-lg font-text font-black uppercase text-center lg:text-left">
                                Contáctanos y recibe información personalizada
                            </h3>

                            <div class="grid gap-4 md:gap-5 sm:grid-cols-2">
                                <input type="text" placeholder="Nombre"
                                    class="w-full border border-slate-200 px-4 py-3 md:py-4 text-xs md:text-sm uppercase outline-none focus:border-red-600 font-text rounded-sm">

                                <input type="text" placeholder="Apellido"
                                    class="w-full border border-slate-200 px-4 py-3 md:py-4 text-xs md:text-sm uppercase outline-none focus:border-red-600 font-text rounded-sm">
                            </div>

                            <input type="email" placeholder="Email"
                                class="w-full border border-slate-200 px-4 py-3 md:py-4 text-xs md:text-sm uppercase outline-none focus:border-red-600 font-text rounded-sm">

                            <textarea rows="5" md:rows="7" placeholder="Mensaje"
                                    class="w-full border border-slate-200 px-4 py-3 md:py-4 text-xs md:text-sm uppercase outline-none focus:border-red-600 font-text rounded-sm"></textarea>

                            <div class="text-center lg:text-right">
                                <button type="button"
                                        class="w-full sm:w-auto bg-red-600 px-10 md:px-12 py-3 md:py-4 text-sm font-black uppercase text-white transition hover:bg-red-700 rounded">
                                    Enviar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        {{-- Footer --}}
        <footer class="border-t border-slate-200 px-6 py-8">
            <div class="mx-auto flex max-w-7xl flex-col gap-4 text-xs font-bold uppercase text-slate-500 md:grid md:grid-cols-3 md:items-center text-center md:text-left">
                <p><span class="text-red-600">Avanser</span> Centro de Servicio Automotriz</p>

                <div class="flex flex-col md:flex-row flex-wrap gap-4 md:gap-6 justify-center">
                    <a href="#" class="hover:text-red-600">Política de privacidad</a>
                    <a href="#" class="hover:text-red-600">Términos de servicio</a>
                    <a href="#" class="hover:text-red-600">FAQ</a>
                </div>

                <p class="md:text-right mt-4 md:mt-0">© {{ date('Y') }} Avanser. Mantente en el camino.</p>
            </div>
        </footer>

    </div>

    </main>

    {{-- Modal: Servicio Preventivo --}}
    <div id="modal-preventivo" class="fixed inset-0 z-50 hidden items-center justify-center px-4">
        <div class="js-modal-backdrop absolute inset-0 bg-slate-900/60 backdrop-blur-sm"></div>

        <div class="relative w-full max-w-lg rounded-lg bg-white p-8 md:p-10 shadow-2xl text-center">
            <button type="button" class="js-modal-close absolute top-4 right-4 text-slate-400 transition hover:text-slate-700"
                    aria-label="Cerrar">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <h3 class="text-2xl md:text-3xl font-title font-black uppercase text-slate-900">
                Servicio Preventivo
            </h3>
            <div class="mx-auto mt-4 h-1 w-16 bg-yellow-400"></div>

            <h4 class="mt-5 text-base md:text-lg font-title font-bold uppercase text-red-600">
                Detalle del Servicio
            </h4>

            <p class="mt-4 text-sm md:text-base text-slate-600 font-text">
                Incluye opciones como mantenimiento mayor y menor, revisión de suspensión, frenos, aire acondicionado, luces y sistema eléctrico.
            </p>

            <a href="#contacto" class="js-modal-contact mt-8 mx-auto inline-block rounded bg-red-600 px-10 py-3 text-sm font-title font-bold uppercase text-white shadow-md transition hover:bg-red-700 hover:shadow-lg">
                Solicitar Información
            </a>
        </div>
    </div>

    {{-- Modal: Sistema Correctivo --}}
    <div id="modal-correctivo" class="fixed inset-0 z-50 hidden items-center justify-center px-4">
        <div class="js-modal-backdrop absolute inset-0 bg-slate-900/60 backdrop-blur-sm"></div>

        <div class="relative w-full max-w-lg rounded-lg bg-white p-8 md:p-10 shadow-2xl text-center">
            <button type="button" class="js-modal-close absolute top-4 right-4 text-slate-400 transition hover:text-slate-700"
                    aria-label="Cerrar">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <h3 class="text-2xl md:text-3xl font-title font-black uppercase text-slate-900">
                Sistema Correctivo
            </h3>
            <div class="mx-auto mt-4 h-1 w-16 bg-yellow-400"></div>

            <h4 class="mt-5 text-base md:text-lg font-title font-bold uppercase text-red-600">
                Detalle del Servicio
            </h4>

            <p class="mt-4 text-sm md:text-base text-slate-600 font-text">
                Atención a sistemas de diagnóstico, electrónica, motor, dirección y transmisión, de acuerdo con la necesidad de cada vehículo.
            </p>

            <a href="#contacto" class="js-modal-contact mt-8 mx-auto inline-block rounded bg-red-600 px-10 py-3 text-sm font-title font-bold uppercase text-white shadow-md transition hover:bg-red-700 hover:shadow-lg">
                Solicitar Información
            </a>
        </div>
    </div>

    {{-- Modal: Neumáticos --}}
    <div id="modal-neumaticos" class="fixed inset-0 z-50 hidden items-center justify-center px-4">
        <div class="js-modal-backdrop absolute inset-0 bg-slate-900/60 backdrop-blur-sm"></div>

        <div class="relative w-full max-w-lg rounded-lg bg-white p-8 md:p-10 shadow-2xl text-center">
            <button type="button" class="js-modal-close absolute top-4 right-4 text-slate-400 transition hover:text-slate-700"
                    aria-label="Cerrar">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <h3 class="text-2xl md:text-3xl font-title font-black uppercase text-slate-900">
                Neumáticos
            </h3>
            <div class="mx-auto mt-4 h-1 w-16 bg-yellow-400"></div>

            <h4 class="mt-5 text-sm md:text-lg font-title font-bold uppercase text-red-600">
                Detalle del Servicio
            </h4>

            <p class="mt-4 text-sm md:text-base text-slate-600 font-text">
                Servicio de llantas, alineación, balanceo y montaje.
            </p>

            <a href="#contacto" class="js-modal-contact mt-8 mx-auto inline-block rounded bg-red-600 px-10 py-3 text-sm font-title font-bold uppercase text-white shadow-md transition hover:bg-red-700 hover:shadow-lg">
                Solicitar Información
            </a>
        </div>
    </div>

    {{-- Script para el menú móvil --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');
            const links = document.querySelectorAll('.mobile-link');
            const spans = btn.querySelectorAll('span');

            function toggleMenu() {
                menu.classList.toggle('hidden');
                
                // Animar el icono de hamburguesa a una "X"
                if (menu.classList.contains('hidden')) {
                    spans[0].style.transform = 'rotate(0) translate(0, 0)';
                    spans[1].style.opacity = '1';
                    spans[2].style.transform = 'rotate(0) translate(0, 0)';
                } else {
                    spans[0].style.transform = 'rotate(45deg) translate(2px, -2px)';
                    spans[1].style.opacity = '0';
                    spans[2].style.transform = 'rotate(-45deg) translate(2px, 2px)';
                }
            }

            // Modales de servicios
            const modalTriggers = document.querySelectorAll('[data-modal-target]');

            function openModal(modal) {
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                document.body.classList.add('overflow-hidden');
            }

            function closeModal(modal) {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                document.body.classList.remove('overflow-hidden');
            }

            modalTriggers.forEach(trigger => {
                trigger.addEventListener('click', (e) => {
                    e.preventDefault();
                    const modal = document.getElementById(trigger.dataset.modalTarget);
                    if (modal) openModal(modal);
                });
            });

            document.querySelectorAll('.js-modal-close, .js-modal-backdrop').forEach(el => {
                el.addEventListener('click', () => {
                    closeModal(el.closest('.fixed'));
                });
            });

            document.querySelectorAll('.js-modal-contact').forEach(el => {
                el.addEventListener('click', (e) => {
                    e.preventDefault();
                    closeModal(el.closest('.fixed'));
                    const contacto = document.getElementById('contacto');
                    if (contacto) {
                        contacto.scrollIntoView({ behavior: 'smooth' });
                    }
                });
            });

            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') {
                    document.querySelectorAll('.fixed.z-50.flex').forEach(closeModal);
                }
            });

            btn.addEventListener('click', toggleMenu);

            // Cerrar el menú al hacer clic en un enlace
            links.forEach(link => {
                link.addEventListener('click', () => {
                    if (!menu.classList.contains('hidden')) {
                        toggleMenu();
                    }
                });
            });
        });
    </script>

@endsection
