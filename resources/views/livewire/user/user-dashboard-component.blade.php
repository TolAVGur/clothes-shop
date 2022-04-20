@section('title')
Кабінет користувача
@endsection

<div style="text-align: center; padding-top: 20px;">
    <p>В розробці...</p>
    <hr>

    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
    @livewire('profile.update-profile-information-form')
    @endif

    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
    <div class="mt-10 sm:mt-0">
        @livewire('profile.update-password-form')
    </div>
    @endif

</div>