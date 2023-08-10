<x-guest-layout>
    <x-auth-card>
            <div id="title2" style="margin-left:30%; margin-bottom:-50px;">
                <a href='/FoodService/public'>
                    <img src="{{url('images/logo2.png')}}" /> 
                </a>
            </div>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
    
        <div id="createContainer">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Email:</span>
                </div>
                
                <input placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus style="margin-bottom:20px">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Password:</span>
                </div>
                <input placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
               
            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="text-gray-600 ml-4">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
    </x-auth-card>
</x-guest-layout>
