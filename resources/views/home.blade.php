@extends('layouts.public')

@section('title', 'Avanser - Servicios especializados en flotillas')

@section('description', 'Mantenimiento preventivo, correctivo y administración de flotillas con cobertura nacional.')

@section('content')

    <main class="min-h-screen bg-white">

    <div class="w-full xl:max-w-[70%] lg:max-w-[85%] md:max-w-[95%] mx-auto">

        {{-- Header --}}
        <header class="fixed top-0 left-0 z-50 w-full bg-white/95 shadow-sm backdrop-blur mb-6">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-6 md:px-20 py-4 md:py-0 relative">

                <!-- Hamburger Button Mobile -->
                <button id="mobile-menu-btn" class="md:hidden flex flex-col gap-1.5 p-2 focus:outline-none z-50">
                    <span class="block w-6 h-0.5 bg-slate-900 transition-transform duration-300 origin-top-left"></span>
                    <span class="block w-6 h-0.5 bg-slate-900 transition-opacity duration-300"></span>
                    <span class="block w-6 h-0.5 bg-slate-900 transition-transform duration-300 origin-bottom-left"></span>
                </button>

                <!-- Botón Reservar Desktop -->
                <a href="#contacto"
                   class="hidden rounded bg-avanserRed px-5 py-3 text-xs font-title font-bold uppercase text-white shadow hover:bg-red-700 md:inline-flex">
                    Reservar ahora
                </a>

                <!-- Nav Desktop -->
                <nav class="hidden items-center gap-8 text-sm font-title font-bold uppercase tracking-wide text-slate-700 md:flex">
                    <a href="#quienes-somos" class="hover:text-avanserRed hover:underline hover:underline-offset-6 hover:decoration-4 hover:decoration-avanserYellow">Quiénes somos</a>
                    <a href="#servicios" class="hover:text-avanserRed hover:underline hover:underline-offset-6 hover:decoration-4 hover:decoration-avanserYellow">Servicios</a>
                    <a href="#clientes" class="hover:text-avanserRed hover:underline hover:underline-offset-6 hover:decoration-4 hover:decoration-avanserYellow">Clientes</a>
                    <a href="#presencia" class="hover:text-avanserRed hover:underline hover:underline-offset-6 hover:decoration-4 hover:decoration-avanserYellow">Presencia</a>
                    <a href="#contacto" class="hover:text-avanserRed hover:underline hover:underline-offset-6 hover:decoration-4 hover:decoration-avanserYellow">Contacto</a>
                </nav>

                <!-- Logo Desktop -->
                <a href="#" class="hidden md:inline-flex items-center py-2">
                    <img src="{{ asset('images/avanser/logo.png') }}"
                         alt="Avanser Centro de Servicio Automotriz"
                         class="h-22 w-auto">
                </a>

                <!-- Logo Mobile -->
                <a href="#" class="inline-flex items-center md:hidden">
                    <img src="{{ asset('images/avanser/logo.png') }}"
                         alt="Avanser Centro de Servicio Automotriz"
                         class="h-14 w-auto">
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
        <section id="quienes-somos" class="mx-auto grid max-w-7xl gap-8 px-6 py-12 md:py-16 lg:grid-cols-2">

            <div class="overflow-hidden order-2 lg:order-1">
                <img src="{{ asset('images/avanser/quienessomos.png') }}"
                     alt="Mecánico dando servicio a vehículo"
                     class="w-full rounded-sm object-cover transition-transform duration-500 ease-in-out hover:scale-105">
            </div>

            <div class="flex items-center border-l-4 lg:border-l-0 lg:border-r-4 border-yellow-400 bg-white p-6 md:p-10 rounded-sm order-1 lg:order-2">
                <div class="mx-auto max-w-lg text-center">

                    <div class="flex items-center justify-center gap-4">
                        <img src="{{ asset('images/avanser/quienessomosicon.svg') }}"
                             alt="Mecánico dando servicio a vehículo"
                             class="h-10 md:h-12 w-auto">

                        <h2 class="text-3xl md:text-4xl font-title font-bold uppercase text-slate-900">
                            Quiénes somos
                        </h2>
                    </div>

                    <p class="mt-6 md:mt-8 text-base md:text-lg leading-relaxed text-slate-700 font-text">
                        Somos un equipo de asesores especializados en mantenimiento para flotillas a Diésel y Gasolina.
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
        <section id="servicios" class="bg-white px-6 py-12 md:py-16">
            <div class="mx-auto max-w-7xl text-center">

                <h2 class="text-3xl md:text-4xl font-black uppercase text-slate-900 font-title">
                    Nuestros servicios
                </h2>

                <div class="mx-auto mt-5 h-1 w-24 bg-yellow-400"></div>

                <div class="mt-10 md:mt-14 grid gap-8 md:grid-cols-3">

                    <div class="rounded bg-white p-8 md:p-10 shadow-lg">
                        <img src="{{ asset('images/avanser/serviciopreventivoicon.svg') }}"
                             alt="Servicio preventivo"
                             class="h-16 md:h-20 w-auto mx-auto">
                        <h3 class="mt-6 text-base md:text-lg font-title font-bold uppercase">Servicio preventivo</h3>
                        <p class="mt-4 text-sm md:text-base text-slate-600 font-text max-w-[80%] md:max-w-[60%] mx-auto">
                            Siempre mantén tus vehículos en óptimas condiciones.
                        </p>
                    </div>

                    <div class="rounded bg-white p-8 md:p-10 shadow-lg">
                        <img src="{{ asset('images/avanser/sistemacorrectivoicon.svg') }}"
                             alt="Sistema correctivo"
                             class="h-16 md:h-20 w-auto mx-auto">
                        <h3 class="mt-6 text-base md:text-lg font-title font-bold uppercase">Sistema correctivo</h3>
                        <p class="mt-4 text-sm md:text-base text-slate-600 font-text max-w-[80%] md:max-w-[60%] mx-auto">
                            Corregimos las fallas de tu unidad.
                        </p>
                    </div>

                    <div class="rounded bg-white p-8 md:p-10 shadow-lg">
                        <img src="{{ asset('images/avanser/neumaticosicon.svg') }}"
                             alt="Neumáticos"
                             class="h-16 md:h-20 w-auto mx-auto">
                        <h3 class="mt-6 text-base md:text-lg font-title font-bold uppercase">Neumáticos</h3>
                        <p class="mt-4 text-sm md:text-base text-slate-600 font-text max-w-[80%] md:max-w-[60%] mx-auto">
                            Llantas, alineación, balanceo y montaje.
                        </p>
                    </div>

                </div>

                <a href="#contacto"
                   class="mt-12 md:mt-15 inline-flex bg-red-600 px-10 py-4 text-sm md:text-base font-title font-bold uppercase text-white transition hover:bg-red-700 rounded">
                    Más servicios
                </a>

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
            <div class="mx-auto grid max-w-7xl gap-8 rounded-lg bg-white p-6 md:p-8 lg:grid-cols-2">

                <div class="lg:pl-12 text-center lg:text-left">
                    <h2 class="text-3xl md:text-4xl font-title font-black uppercase text-slate-900 lg:pt-10">
                        Presencia
                    </h2>

                    <div class="mt-8 space-y-6 md:space-y-8 text-slate-700 text-left">
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
