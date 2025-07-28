<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .auth-bg {
            background: linear-gradient(135deg, rgba(229,57,53,0.1) 0%, rgba(255,255,255,1) 100%);
        }
        .auth-card {
            box-shadow: 0 10px 25px -5px rgba(229, 57, 53, 0.1), 0 10px 10px -5px rgba(229, 57, 53, 0.04);
            border: 1px solid rgba(229, 57, 53, 0.1);
        }
        .card-header {
            background-color: #E53935;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased min-h-screen flex items-center">

    {{-- Contenu principal --}}
    <main class="w-full py-12 px-4">
        <div class="max-w-md mx-auto bg-white auth-card rounded-xl overflow-hidden">
            {{-- Header de la carte --}}
            <div class="card-header py-4 px-6">
                <div class="flex justify-center">
                    <img src="{{ asset('img/joracle-logo-white.png') }}" alt="Joracle Logo" class="h-10">
                </div>
            </div>
            
            {{-- Contenu du formulaire --}}
            <div class="p-8">
                {{ $slot }}
            </div>
            
            {{-- Footer de la carte --}}
            <div class="bg-gray-50 px-6 py-4 text-center border-t border-gray-100">
                <p class="text-sm text-gray-600">
                    Pas encore membre ? 
                    <a href="{{ route('register') }}" class="font-medium text-[#E53935] hover:text-[#C62828] transition duration-300">
                        Créer un compte
                    </a>
                </p>
            </div>
        </div>
    </main>
    
</body>
</html>