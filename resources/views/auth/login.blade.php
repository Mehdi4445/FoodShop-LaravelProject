<title>My FoodShop - Login</title>



<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo"></x-slot>
            <x-jet-validation-errors class="mb-4" />
            <section class="h-100 bg-dark">

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
                <x-jet-label for="password" value="{{ __('Mot de pass') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="flex items-center justify-end mt-4">

            <a  href="{{ route('register') }}">S'enregistrer</a>

                <x-jet-button class="ml-4 ">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
