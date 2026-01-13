<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            <!-- {{ __('Delete Account') }} -->
            {{ __('Supprimer le compte') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            <!-- {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }} -->
             {{ __('Une fois que votre compte supprimer, tout vos ressources et données seront supprimer de facons permanent. Avant de supprimer votre compte, télécharger certaines de vos données dont vous souhaitez conserver .') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    > <!-- {{ __('Delete Account') }} -->
        {{ __('Supprimé le compte') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                <!-- {{ __('Are you sure you want to delete your account?') }} -->
                {{ __('Etes-vous sur de vouloir supprimé votre compte?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                 <!-- {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }} -->

                {{ __('Une fois supprimé votre compte, tout ses ressources et données seront permanement supprimé. Entrez votre mot de pass pour confirmer que vous voullez permanement supprimé votre compte  .') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                      <!-- {{ __('Cancel') }} -->
                     {{ __('Quitter') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                                        <!-- {{ __('Delete Account') }} -->
                     {{ __('Supprimé le compte') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
