@section('title')
Кабінет користувача
@endsection

<div class="container">
    <div class="row">

        <!-- Update profile information -->
        <div class="col-md-4">
            <div>
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')
                @endif
            </div>

        </div>

        <!-- Update password -->
        <div class="col-md-4">
            <div>
                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>
                @endif
            </div>
        </div>

        <!-- Delete account -->
        {{-- <div class="col-md-4">
            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
            <div class="mt-10 sm:mt-0">
                @livewire('profile.delete-user-form')
            </div>
            @endif
        </div>
        --}}

    </div>
</div>