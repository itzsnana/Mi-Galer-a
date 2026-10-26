<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-800 antialiased min-h-screen">

    <header class="bg-[#0f172a] text-white px-6 py-4 shadow-md">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold tracking-wide">Galería</h1>
            
            <nav class="hidden md:flex space-x-6 text-sm font-medium">
                <a href="#" class="hover:text-slate-300 transition">Inicio</a>
                <a href="#" class="hover:text-slate-300 transition">Galería</a>
                <a href="#" class="hover:text-slate-300 transition">Nosotros</a>
                <a href="#" class="hover:text-slate-300 transition">Contacto</a>
            </nav>

            <div class="md:hidden">
                <button class="focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        
        <h2 class="text-3xl font-extrabold text-center text-slate-900 mb-10">Nuestra Galería</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <div class="bg-white rounded-2xl shadow-md overflow-hidden border border-slate-100 flex flex-col">
                <img src="{{ asset('images/focapumpe.jpg') }}" alt="focapumpe" class="w-full h-48 object-cover">
                <div class="p-5 flex flex-col flex-grow">
                    <h3 class="font-bold text-lg text-slate-900 mb-1">Foquita</h3>
                    <p class="text-slate-600 text-sm">Foca festejando su pumpeaños</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-md overflow-hidden border border-slate-100 flex flex-col">
                <img src="{{ asset('images/conejopanzon.jpg') }}" alt="conejopanzon" class="w-full h-48 object-cover">
                <div class="p-5 flex flex-col flex-grow">
                    <h3 class="font-bold text-lg text-slate-900 mb-1">Conejitos</h3>
                    <p class="text-slate-600 text-sm">Conejitos panzones</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-md overflow-hidden border border-slate-100 flex flex-col">
                <img src="{{ asset('images/focapumpe.jpg') }}" alt="focapumpe" class="w-full h-48 object-cover">
                <div class="p-5 flex flex-col flex-grow">
                    <h3 class="font-bold text-lg text-slate-900 mb-1">Foquita</h3>
                    <p class="text-slate-600 text-sm">Foca festejando su pumpeaños</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-md overflow-hidden border border-slate-100 flex flex-col">
                <img src="{{ asset('images/conejopanzon.jpg') }}" alt="conejopanzon" class="w-full h-48 object-cover">
                <div class="p-5 flex flex-col flex-grow">
                    <h3 class="font-bold text-lg text-slate-900 mb-1">Conejitos</h3>
                    <p class="text-slate-600 text-sm">Conejitos panzones</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-md overflow-hidden border border-slate-100 flex flex-col">
                <img src="{{ asset('images/focapumpe.jpg') }}" alt="focapumpe" class="w-full h-48 object-cover">
                <div class="p-5 flex flex-col flex-grow">
                    <h3 class="font-bold text-lg text-slate-900 mb-1">Foquita</h3>
                    <p class="text-slate-600 text-sm">Foca festejando su pumpeaños</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-md overflow-hidden border border-slate-100 flex flex-col">
                <img src="{{ asset('images/conejopanzon.jpg') }}" alt="conejopanzon" class="w-full h-48 object-cover">
                <div class="p-5 flex flex-col flex-grow">
                    <h3 class="font-bold text-lg text-slate-900 mb-1">Conejitos</h3>
                    <p class="text-slate-600 text-sm">Conejitos panzones</p>
                </div>
            </div>

        </div>
    </main>

</body>
</html>