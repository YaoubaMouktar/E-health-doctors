<x-guest-layout>
    <div class="bg-white" style="padding: 23px;">
        <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" class="text-gray-400 hover:text-gray-600 no-underline hover:transition"/>
            <div class="flex">
                <span class="inline-flex items-center px-3 border border-r-0 border-gray-300 bg-gray-50 text-gray-600 rounded-l-lg" style="border-radius: 8px 0 0 8px;">
                    <i class="fas fa-user"></i> <!-- Changé ici -->
                </span>
                <x-text-input id="name" class="w-full" type="text"  style="border-radius:0 8px 8px 0; font-size: 14px;" placeholder="votre nom" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" class="text-gray-400 hover:text-gray-600 no-underline hover:transition"/>
            <div class="flex">
                <span class="inline-flex items-center px-3 border border-r-0 border-gray-300 bg-gray-50 text-gray-600 rounded-l-lg" style="border-radius: 8px 0 0 8px;">
                    <i class="fas fa-envelope"></i> <!-- Changé ici -->
                </span>
            <x-text-input id="email" class="block mt-1 w-full" class="w-full" 
                    style="border-radius:0 8px 8px 0; font-size: 14px;"
                    placeholder="votre e-mail" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-gray-400 hover:text-gray-600 no-underline hover:underline transition"/>
            <div class="flex">
                <span class="inline-flex items-center px-3 border border-r-0 border-gray-300 bg-gray-50 text-gray-600 rounded-l-lg" style="border-radius: 8px 0 0 8px;">
                    <i class="fas fa-lock"></i> <!-- Changé ici -->
                </span>
            <x-text-input id="password" class="w-full" 
                    style="border-radius:0 8px 8px 0; font-size: 14px;"
                    placeholder="votre e-mail"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-gray-400 hover:text-gray-600 no-underline hover:underline transition"/>
            <div class="flex">
                <span class="inline-flex items-center px-3 border border-r-0 border-gray-300 bg-gray-50 text-gray-600 rounded-l-lg" style="border-radius: 8px 0 0 8px;">
                    <i class="fas fa-lock"></i> <!-- Changé ici -->
                </span>
            <x-text-input id="password_confirmation" class="w-full" 
                     class="w-full" 
                    style="border-radius:0 8px 8px 0; font-size: 14px;"
                    placeholder="confirmer votre mot de passe"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline transition" href="{{ route('login') }}" wire:navigate>
                {{ __('Déjà inscrit ?') }}
            </a>
        </div>

            <button class="mt-4 w-full bg-gray-800 hover:bg-gray-700 text-white font-semibold py-3 px-4 rounded-lg transition duration-300 ease-in-out transform hover:-translate-y-0.5 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-opacity-50">
            <i class="fas fa-user-plus mr-2"></i>{{ __("S'inscrire") }}
            </button>
        </div>
    </form>

    <div class="text-center py-4">
        <p class="text-gray-400 text-xs">
            <a href="{{ url('/') }}" class="text-gray-400 hover:text-gray-600 no-underline hover:underline transition" wire:navigate>
                Retour à l'accueil
            </a>
            <span class="mx-2">•</span>
            <a href="#" class="text-gray-400 hover:text-gray-600 no-underline hover:underline transition">
                Conditions d'utilisation
            </a>
        </p>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </div>
</x-guest-layout>
