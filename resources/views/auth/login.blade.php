<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-6 px-6 py-6">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="block text-gray-700 text-sm font-medium mb-3"/>
            <div class="flex">
                    <span class="inline-flex items-center px-3 border border-r-0 border-gray-300 bg-gray-50 text-gray-600 rounded-l-lg" style="border-radius: 8px 0 0 8px;">
                            <i class="fas fa-envelope"></i>
                        </span>
            <x-text-input id="email" class="w-full" 
                              style="border-radius:0 8px 8px 0; font-size: 14px;"  placeholder="votre@email.com" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>                  
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="block text-gray-700 text-sm font-medium mb-3"/>
            <div class="flex">
                    <span class="inline-flex items-center px-3 border border-r-0 border-gray-300 bg-gray-50 text-gray-600 rounded-l-lg" style="border-radius: 8px 0 0 8px;">
                            <i class="fas fa-lock"></i>
                        </span>
            <x-text-input id="password" class="w-full"
                              style="border-radius:0 8px 8px 0; font-size: 14px;"
                              placeholder="Votre mot de passe"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                   {{ __('Mot de passe oublié ?') }}
                </a>
            @endif

            <div class="flex items-center"> 
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('se souvenir de moi') }}</span>
            </label>
             </div>
        </div>
        <!-- Bouton de connexion -->
            <div>
                <button type="submit" class="w-full bg-gray-800 hover:bg-gray-700 text-white font-semibold py-3 px-4 rounded-lg transition duration-300 ease-in-out transform hover:-translate-y-0.5 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-opacity-50">
                    <!-- w-full justify-center py-3.5 px-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-lg transition duration-200 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 -->
                       <i class="fas fa-sign-in-alt mr-2"></i>{{ __('Se connecter')}}
                </button>
            </div>


            <!-- Lien d'inscription -->
            <div class="text-center">
                <p class="text-gray-600 text-sm">
                    Vous n'avez pas de compte ?
                    <a href="{{ route('register') }}" 
                       class="underline text-blue-500 hover:text-blue-700  no-underline hover:underline transition"
                       wire:navigate>
                        Créer un compte
                    </a>
                </p>
            </div>


             <!-- Liens du bas -->
            <div class="text-center pt-2">
                <p class="text-gray-400 text-xs">
                    <a href="{{ url('/') }}" 
                       class="text-gray-400 hover:text-gray-600 no-underline hover:underline transition"
                       wire:navigate>
                        {{ __('Retour à l\'accueil') }}
                    </a>
                    <span class="mx-2">•</span>
                    <a href="#" 
                       class="text-gray-400 hover:text-gray-600 no-underline hover:underline transition">
                        Conditions d'utilisation
                    </a>
                </p>
            </div>
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </form>
</x-guest-layout>