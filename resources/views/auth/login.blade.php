<x-guest-layout>

    <h2 class="text-2xl font-bold mb-6 text-[#C62828] text-center">Connexion à votre compte</h2>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="'Adresse email'" />
            <x-text-input id="email" class="w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="'Mot de passe'" />
            <x-text-input id="password" class="w-full" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between text-sm text-gray-600">
            <label class="inline-flex items-center">
                <input type="checkbox" name="remember" class="rounded border-gray-300 text-[#E53935] focus:ring-[#E53935]">
                <span class="ml-2">Se souvenir de moi</span>
            </label>
            @if (Route::has('password.request'))
                <a class="hover:text-[#E53935]" href="{{ route('password.request') }}">
                    Mot de passe oublié ?
                </a>
            @endif
        </div>

        <!-- Submit -->
        <div>
            <x-primary-button class="w-full justify-center bg-[#E53935] hover:bg-[#C62828]">
                {{ __('CONNEXION') }}
            </x-primary-button>
        </div>
    </form>

</x-guest-layout>
