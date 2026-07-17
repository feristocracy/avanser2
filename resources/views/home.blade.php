@extends('layouts.public')

@section('title', 'Avanser - Servicios especializados en flotillas')

@section('description', 'Mantenimiento preventivo, correctivo y administración de flotillas con cobertura nacional.')

@section('content')

    <main class="min-h-screen bg-white">

    <div class="max-w-[70%] mx-auto">

        {{-- Header --}}
        <header class="fixed top-0 left-0 z-50 w-full bg-white/95 shadow-sm backdrop-blur mb-6">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-20">

                <a href="#contacto"
                   class="hidden rounded bg-avanserRed px-5 py-3 text-xs font-title font-bold uppercase text-white shadow hover:bg-red-700 md:inline-flex">
                    Reservar ahora
                </a>

                <nav class="hidden items-center gap-8 text-sm font-title font-bold uppercase tracking-wide text-slate-700 md:flex">
                    <a href="#quienes-somos" class="hover:text-avanserRed hover:underline hover:underline-offset-6 hover:decoration-4 hover:decoration-avanserYellow">Quiénes somos</a>
                    <a href="#servicios" class="hover:text-avanserRed hover:underline hover:underline-offset-6 hover:decoration-4 hover:decoration-avanserYellow">Servicios</a>
                    <a href="#clientes" class="hover:text-avanserRed hover:underline hover:underline-offset-6 hover:decoration-4 hover:decoration-avanserYellow">Clientes</a>
                    <a href="#presencia" class="hover:text-avanserRed hover:underline hover:underline-offset-6 hover:decoration-4 hover:decoration-avanserYellow">Presencia</a>
                    <a href="#contacto" class="hover:text-avanserRed hover:underline hover:underline-offset-6 hover:decoration-4 hover:decoration-avanserYellow">Contacto</a>
                </nav>

                <a href="#" class="inline-flex items-center">
                    <img src="{{ asset('images/avanser/logo.png') }}"
                         alt="Avanser Centro de Servicio Automotriz"
                         class="h-22 w-auto">
                </a>


            </div>
        </header>

        {{-- Hero --}}
        <section class="relative flex min-h-[680px] items-center overflow-hidden pt-24">

            <img src="{{ asset('images/avanser/hero2.png') }}"
                 alt="Flotilla de vehículos"
                 class="absolute inset-0 h-full w-full object-cover">

            <div class="absolute inset-0 bg-white/35"></div>

            <div class="z-10 mx-auto w-full max-w-7xl px-20 pt-10">
                <div class="w-full h-full">

                    <p class="tracking-tight text-xl font-title font-bold uppercase tracking-[0.25em] text-avanserYellow drop-shadow-[0_0_20px_rgba(255,255,255,0.8)]">
                        Ingeniería de precisión
                    </p>

                    <h1 class="mt-2 text-5xl font-title font-bold uppercase leading-tight text-slate-900 md:text-6xl drop-shadow-[0_0_10px_rgba(255,255,255,0.9)]">
                        Servicios especializados
                        <span class="block text-avanserRed drop-shadow-[0_0_10px_rgba(255,255,255,0.9)]">en flotillas</span>
                    </h1>

                    <p class="max-w-xl text-lg font-text font-weight-bold leading-relaxed drop-shadow-[0_0_10px_rgba(255,255,255,0.9)]">
                        Mantenimiento preventivo, correctivo y administración de flotillas con cobertura nacional.
                    </p>

                    <div class="mt-8 h-2 w-24 bg-yellow-400"></div>

                    <a href="#contacto"
                       class="mt-10 ml-auto flex w-fit bg-red-600 px-10 py-4 text-sm font-title font-bold uppercase text-white shadow-lg transition hover:bg-red-700 justify-between rounded tracking-wide">
                        Agenda tu cita
                    </a>

                </div>
            </div>
        </section>

        {{-- Quiénes somos --}}
        <section id="quienes-somos" class="mx-auto grid max-w-7xl gap-8 px-6 py-16 lg:grid-cols-2">

            <div class="overflow-hidden">
                <img src="{{ asset('images/avanser/quienessomos.png') }}"
                     alt="Mecánico dando servicio a vehículo"
                     class="w-full rounded-sm object-cover trainsition-transform duration-500 ease-in-out hover:scale-105">
            </div>

            <div class="flex items-center border-r-4 border-yellow-400 bg-white p-10 rounded-sm">
                <div class="mx-auto max-w-lg text-center">

                    <div class="flex items-center justify-center gap-4">
                        <img src="{{ asset('images/avanser/quienessomosicon.svg') }}"
                             alt="Mecánico dando servicio a vehículo"
                             class="h-12 w-auto">

                        <h2 class="text-4xl font-title font-bold uppercase text-slate-900">
                            Quiénes somos
                        </h2>
                    </div>

                    <p class="mt-8 text-lg leading-relaxed text-slate-700 font-text">
                        Somos un equipo de asesores especializados en mantenimiento para flotillas a Diésel y Gasolina.
                        Tenemos presencia en varios estados del país.
                    </p>

                    <a href="#contacto"
                       class="mt-10 inline-flex bg-red-600 px-8 py-3 text-base font-title font-bold uppercase text-white transition hover:bg-red-700 font-title font-bold rounded">
                        Conócenos
                    </a>

                </div>
            </div>

        </section>

        {{-- Servicios --}}
        <section id="servicios" class="bg-white px-6 py-16">
            <div class="mx-auto max-w-7xl text-center">

                <h2 class="text-4xl font-black uppercase text-slate-900 font-title">
                    Nuestros servicios
                </h2>

                <div class="mx-auto mt-5 h-1 w-24 bg-yellow-400"></div>

                <div class="mt-14 grid gap-8 md:grid-cols-3">

                    <div class="rounded bg-white p-10 shadow-lg">
                        <img src="{{ asset('images/avanser/serviciopreventivoicon.svg') }}"
                             alt="Servicio preventivo"
                             class="h-20 w-auto mx-auto">
                        <h3 class="mt-6 text-lg font-title font-bold uppercase">Servicio preventivo</h3>
                        <p class="mt-4 text-slate-600 font-text max-w-[60%] mx-auto">
                            Siempre mantén tus vehículos en óptimas condiciones.
                        </p>
                    </div>

                    <div class="rounded bg-white p-10 shadow-lg">
                        <img src="{{ asset('images/avanser/sistemacorrectivoicon.svg') }}"
                             alt="Sistema correctivo"
                             class="h-20 w-auto mx-auto">
                        <h3 class="mt-6 text-lg font-title font-bold uppercase">Sistema correctivo</h3>
                        <p class="mt-4 text-slate-600 font-text max-w-[60%] mx-auto">
                            Corregimos las fallas de tu unidad.
                        </p>
                    </div>

                    <div class="rounded bg-white p-10 shadow-lg">
                        <img src="{{ asset('images/avanser/neumaticosicon.svg') }}"
                             alt="Neumáticos"
                             class="h-20 w-auto mx-auto">
                        <h3 class="mt-6 text-lg font-title font-bold uppercase">Neumáticos</h3>
                        <p class="mt-4 text-slate-600 font-text max-w-[60%] mx-auto">
                            Llantas, alineación, balanceo y montaje.
                        </p>
                    </div>

                </div>

                <a href="#contacto"
                   class="mt-15 inline-flex bg-red-600 px-10 py-4 text-base font-title font-bold uppercase text-white transition hover:bg-red-700 font-title font-bold rounded">
                    Más servicios
                </a>

            </div>
        </section>

        {{-- Clientes --}}
        <section id="clientes" class="px-6 py-16">
            <div class="mx-auto grid max-w-7xl gap-8 rounded-lg bg-white p-15 shadow-lg lg:grid-cols-2 border-l-4 border-avanserRed">

                <div class="">
                    <h2 class="text-4xl font-bold uppercase text-slate-900 font-title">
                        Principales clientes
                    </h2>

                    <p class="mt-6 text-lg text-slate-600 font-text">
                        Estas son algunas de las empresas que confían en nosotros.
                    </p>

                    <div class="mt-8 grid gap-4 text-sm font-title font-bold uppercase text-slate-700 sm:grid-cols-2">
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
                <div class="relative w-full overflow-hidden py-4">
                    <!-- Gradientes para suavizar la entrada y salida -->
                    <div class="pointer-events-none absolute inset-0 z-10 w-full bg-gradient-to-r from-white via-transparent to-white"></div>
                    
                    <div class="flex w-max items-center gap-10 animate-scroll-logos">
                        <!-- Set 1 -->
                        <img src="{{ asset('images/marcas/ariza.png') }}" alt="Ariza" class="max-h-30 max-w-40 object-contain">
                        <img src="{{ asset('images/marcas/bbva.jpeg') }}" alt="BBVA" class="max-h-30 max-w-40 object-contain">
                        <img src="{{ asset('images/marcas/edenred.png') }}" alt="Edenred" class="max-h-30 max-w-40 object-contain">
                        <img src="{{ asset('images/marcas/jhleasing.png') }}" alt="JH Leasing" class="max-h-30 max-w-40 object-contain">
                        <img src="{{ asset('images/marcas/leaseandfleet.png') }}" alt="Lease and Fleet" class="max-h-30 max-w-40 object-contain">
                        <img src="{{ asset('images/marcas/pepsico.jpeg') }}" alt="Pepsico" class="max-h-30 max-w-40 object-contain">
                        
                        <!-- Set 2 (Duplicado para crear el ciclo infinito) -->
                        <img src="{{ asset('images/marcas/ariza.png') }}" alt="Ariza" class="max-h-20 max-w-40 object-contain">
                        <img src="{{ asset('images/marcas/bbva.jpeg') }}" alt="BBVA" class="max-h-20 max-w-40 object-contain">
                        <img src="{{ asset('images/marcas/edenred.png') }}" alt="Edenred" class="max-h-20 max-w-40 object-contain">
                        <img src="{{ asset('images/marcas/jhleasing.png') }}" alt="JH Leasing" class="max-h-20 max-w-40 object-contain">
                        <img src="{{ asset('images/marcas/leaseandfleet.png') }}" alt="Lease and Fleet" class="max-h-20 max-w-40 object-contain">
                        <img src="{{ asset('images/marcas/pepsico.jpeg') }}" alt="Pepsico" class="max-h-20 max-w-40 object-contain">
                    </div>
                </div>

            </div>
        </section>

        {{-- CTA --}}
        <section class="bg-yellow-50 px-6 py-16 text-center">
            <h2 class="text-4xl font-bold uppercase text-slate-900 font-title">
                ¿Listo para encender el <span class="text-avanserYellow">rendimiento?</span>
            </h2>

            <p class="mx-auto mt-5 max-w-3xl text-lg text-slate-700 font-text">
                Cupos mensuales limitados para consultas de ingeniería personalizadas y auditorías de rendimiento.
                Reserve su bahía de diagnóstico hoy.
            </p>

            <a href="#contacto"
               class="mt-10 inline-flex bg-yellow-400 px-12 py-4 text-base font-title font-bold uppercase text-slate-900 transition hover:bg-yellow-300 font-title">
                Agendar cita
                <img src="{{ asset('images/avanser/citaicon.svg') }}"
                             alt="Agendar cita"
                             class="h-5 ml-1">
            </a>
        </section>

        {{-- Presencia --}}
        <section id="presencia" class="px-6 py-16">
            <div class="mx-auto grid max-w-7xl gap-8 rounded-lg bg-white p-8 lg:grid-cols-2">

                <div class="pl-12">
                    <h2 class="text-4xl font-title font-black uppercase text-slate-900 pt-10">
                        Presencia
                    </h2>

                    <div class="mt-8 space-y-8 text-slate-700">
                        <div class="flex items-center gap-4">
                            <img src="{{ asset('images/avanser/ubicacionicon.svg') }}"
                                 alt="Ubicación Avanser Puebla"
                                 class="h-12 w-12 shrink-0">
                            <div class="font-text">
                                <h3 class="font-black uppercase">Avanser Puebla</h3>
                                <p>Calle 18 sur 303, Barrio de Analco<br>72500, Puebla, Pue.</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <img src="{{ asset('images/avanser/telefonoicon.svg') }}"
                                 alt="Contacto directo"
                                 class="h-12 w-12 shrink-0">
                            <div class="font-text">
                                <h3 class="font-black uppercase">Contacto directo</h3>
                                <p>+52 221 652 7226<br>avanser@gmail.com</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <img src="{{ asset('images/avanser/relojicon.svg') }}"
                                 alt="Horario de operaciones"
                                 class="h-12 w-12 shrink-0">
                            <div class="font-text">
                                <h3 class="font-black uppercase">Horario de operaciones</h3>
                                <p>Lunes - Viernes: 8:30 - 17:30<br>Sábados: 8:30 - 14:00</p>
                            </div>
                        </div>
                    </div>
                </div>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.6021152011735!2d-98.19066458965496!3d19.037246682084938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc0f1e6ca4197%3A0xac71e899d65b2ae2!2sAvanser%20-%20Centro%20de%20Servicio%20Automotriz!5e0!3m2!1ses-419!2smx!4v1783983467869!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>

            </div>
        </section>

        {{-- Contacto --}}
        <section id="contacto" class="px-6 py-16">
            <div class="mx-auto max-w-7xl">

                <div class="grid gap-10 lg:grid-cols-2 overflow-hidden">

                    <img src="{{ asset('images/avanser/contacto.png') }}"
                         alt="Taller Avanser"
                         class="w-full rounded object-cover trainsition-transform duration-500 ease-in-out hover:scale-105">

                    <div class="p-8">
                        <h2 class="mb-10 text-4xl font-title font-black uppercase text-slate-900">
                        ¿Listo para trabajar con nosotros?
                        </h2>
                        <form class="space-y-5">
                            <h3 class="text-lg font-text font-black uppercase">
                                Contáctanos y recibe información personalizada
                            </h3>

                            <div class="grid gap-5 sm:grid-cols-2">
                                <input type="text" placeholder="Nombre"
                                    class="w-full border border-slate-200 px-4 py-4 text-sm uppercase outline-none focus:border-red-600 font-text">

                                <input type="text" placeholder="Apellido"
                                    class="w-full border border-slate-200 px-4 py-4 text-sm uppercase outline-none focus:border-red-600 font-text">
                            </div>

                            <input type="email" placeholder="Email"
                                class="w-full border border-slate-200 px-4 py-4 text-sm uppercase outline-none focus:border-red-600 font-text">

                            <textarea rows="7" placeholder="Mensaje"
                                    class="w-full border border-slate-200 px-4 py-4 text-sm uppercase outline-none focus:border-red-600 font-text"></textarea>

                            <div class="text-right">
                                <button type="button"
                                        class="bg-red-600 px-12 py-4 text-sm font-black uppercase text-white transition hover:bg-red-700 rounded">
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
            <div class="mx-auto flex max-w-7xl flex-col gap-4 text-xs font-bold uppercase text-slate-500 md:grid md:grid-cols-3 md:items-center">
                <p><span class="text-red-600">Avanser</span> Centro de Servicio Automotriz</p>

                <div class="flex flex-wrap gap-6 md:justify-center">
                    <a href="#" class="hover:text-red-600">Política de privacidad</a>
                    <a href="#" class="hover:text-red-600">Términos de servicio</a>
                    <a href="#" class="hover:text-red-600">FAQ</a>
                </div>

                <p class="md:text-right">© {{ date('Y') }} Avanser. Mantente en el camino.</p>
            </div>
        </footer>

    </div>

    </main>

@endsection
