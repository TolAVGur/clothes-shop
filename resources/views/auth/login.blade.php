{{--
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
</div>
@endif

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
        <x-jet-label for="email" value="{{ __('Email') }}" />
        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
    </div>

    <div class="mt-4">
        <x-jet-label for="password" value="{{ __('Password') }}" />
        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
    </div>

    <div class="block mt-4">
        <label for="remember_me" class="flex items-center">
            <x-jet-checkbox id="remember_me" name="remember" />
            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>
    </div>

    <div class="flex items-center justify-end mt-4">
        @if (Route::has('password.request'))
        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
        </a>
        @endif

        <x-jet-button class="ml-4">
            {{ __('Log in') }}
        </x-jet-button>
    </div>
</form>
</x-jet-authentication-card>
</x-guest-layout>
--}}

<x-guest-layout>
    @section('title')
    Авторизація
    @endsection
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-6 col-sm-offset-1">
                    <div class="login-form">
                        <!--login form-->
                        <h2 class="title text-center">Вхід до облікового запису</h2>

                        <x-jet-validation-errors class="mb-4" />
                        <form name="frm-login" action="{{ route('login') }}" method="POST">
                            @csrf
                            <input type="email" name="email" placeholder="Email" :value="old('email')" required autofocus />

                            <input type="password" name="password" placeholder="**********" required autocomplete="current-password" />
                            <div style="margin-top: 40px; margin-bottom: 40px;">
                                <span>
                                    <input type="checkbox" name="remember" class="checkbox" value="forever">
                                    Запам'ятати мене
                                </span>
                                <button type="submit" class="btn btn-warning" name="login"> Увійти</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--/login form-->
        </div>

        <hr>

    </section>

</x-guest-layout>