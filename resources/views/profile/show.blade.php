<x-app-layout>
    <x-slot name="header">
        <div class="container-xl">

            <!-- Page title -->
            <div class="page-header d-print-none">
                <div class="row align-items-center">
                    <div class="col">
                        <!-- Page pre-title -->
                        <div class="page-pretitle">
                            Admin
                        </div>
                        <h2 class="page-title">
                            {{ __('Profile') }}
                        </h2>
                    </div>
                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <div class="btn-list">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>


    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                    <div class="card-body">
                        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                        @livewire('profile.update-profile-information-form')

                        <x-jet-section-border />
                        @endif

                        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                        @livewire('profile.update-password-form')

                        <x-jet-section-border />
                        @endif

                        @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                        @livewire('profile.two-factor-authentication-form')

                        <x-jet-section-border />
                        @endif

                        @livewire('profile.logout-other-browser-sessions-form')

                        @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                        <x-jet-section-border />

                        @livewire('profile.delete-user-form')
                        @endif
                    </div>
                </div>
        </div>
    </div>
</x-app-layout>
