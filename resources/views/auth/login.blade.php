<title> Login </title>
         <link rel="stylesheet" href="{{asset('css/wp.scss')}}" type="text/css">
          
        <!-- Session Status -->
        <div id="authForm">

        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div id="title" style="background:white; margin-bottom:50px;">
                <a href="{{url('/')}}">
                    <img src="{{url('images/logo2.png')}}" /> 
                </a>
            </div>
            <!-- Email -->
            <div class="authInput">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Email:</span>
                </div>
                
                <input placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus style="margin-bottom:20px">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="authInput">
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

            <div class="forPass">
            @if (Route::has('password.request'))
                <a class="forPass" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
            <div class="authButton">
                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>

        </div>
        </form>
    </div>
