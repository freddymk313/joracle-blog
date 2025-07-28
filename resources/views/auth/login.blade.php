<x-guest-layout>

    <div class="text-center mb-8">
        <h2 class="text-2xl font-bold text-[#C62828] mb-2">Connexion à votre compte</h2>
        <p class="text-gray-600">Entrez vos informations pour accéder à votre espace</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4 p-4 bg-green-50 text-green-700 rounded-lg" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <!-- Email Address -->
        <div class="space-y-2">
            <x-input-label for="email" :value="'Adresse email'" class="font-medium text-gray-700" />
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="far fa-envelope text-gray-400"></i>
                </div>
                <x-text-input 
                    id="email" 
                    class="w-full pl-10" 
                    type="email" 
                    name="email" 
                    :value="old('email')" 
                    placeholder="votre@email.com"
                    required 
                    autofocus 
                    autocomplete="username" 
                />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-600" />
        </div>

        <!-- Password -->
        <div class="space-y-2">
            <x-input-label for="password" :value="'Mot de passe'" class="font-medium text-gray-700" />
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fas fa-lock text-gray-400"></i>
                </div>
                <x-text-input 
                    id="password" 
                    class="w-full pl-10" 
                    type="password" 
                    name="password" 
                    placeholder="••••••••"
                    required 
                    autocomplete="current-password" 
                />
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-600" />
        </div>

        <!-- Remember Me & Forgot Password -->
        <div class="flex items-center justify-between">
            <label class="inline-flex items-center">
                <input type="checkbox" name="remember" class="rounded border-gray-300 text-[#E53935] focus:ring-[#E53935] h-4 w-4">
                <span class="ml-2 text-sm text-gray-600">Se souvenir de moi</span>
            </label>
            @if (Route::has('password.request'))
                <a class="text-sm text-[#E53935] hover:text-[#C62828] transition duration-300" href="{{ route('password.request') }}">
                    Mot de passe oublié ?
                </a>
            @endif
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit" class="w-full bg-gradient-to-r from-[#E53935] to-[#F4511E] hover:from-[#C62828] hover:to-[#E53935] text-white py-3 px-4 rounded-lg font-bold shadow-md transform transition duration-300 hover:shadow-lg hover:scale-[1.01] flex items-center justify-center">
                <span>Se connecter</span>
                <i class="fas fa-arrow-right ml-2"></i>
            </button>
        </div>
    </form>

    <!-- Social Login -->
    <div class="mt-8">
        <div class="relative">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class="px-2 bg-white text-gray-500">Ou continuer avec</span>
            </div>
        </div>

        <div class="mt-6 grid grid-cols-2 gap-3">
            <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-lg shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 transition duration-300">
                <i class="fab fa-google text-[#E53935] mr-2"></i>
                Google
            </a>
            <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-lg shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 transition duration-300">
                <i class="fab fa-facebook-f text-blue-600 mr-2"></i>
                Facebook
            </a>
        </div>
    </div>

</x-guest-layout>