@section('title')
Кабінет користувача
@endsection

<div class="container">
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="row">
            <div class="col-md-6">
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')
                <x-jet-section-border />
                @endif
            </div>
            <div class="col-md-6">
                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>
                <x-jet-section-border />
                @endif
            </div>
        </div>
        <hr>
        <div class="row">
            {{--<div class="col-md-6">
                @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>
                <x-jet-section-border />
                @endif
            </div>--}}
            <div class="col-md-6">
                @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
                @endif
            </div>
            <div class="col-md-6">
                <div class="mt-10 sm:mt-0">
                    <div>
                        @livewire('profile.logout-other-browser-sessions-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>