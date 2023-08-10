<x-guest-layout>
    <x-auth-card>
        <div id="title2" style="margin-left:30%; margin-bottom:-50px;">
                <a href='/FoodService/public'>
                    <img src="{{url('images/logo2.png')}}" /> 
                </a>
            </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Name</span>
                </div>
                <input :value="old('name')" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus style="margin-bottom:20px">
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Email</span>
                </div>
                <input :value="old('email')" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus style="margin-bottom:20px">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Address -->
             <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Address</span>
                </div>
                <input :value="old('address')" placeholder="Address" aria-label="Address" aria-describedby="basic-addon1" id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus style="margin-bottom:20px">
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>

            <!-- Role -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Role (Enter 1 for Customer & 2 for Restaurant)</span>
                </div>
                <input :value="old('role')" id="role" class="block mt-1 w-full" type="number" name="role" min="1" max="2" :value="old('role')" required onKeyDown="return false" value="1" style="margin-bottom:20px">
                <x-input-error :messages="$errors->get('role')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Password</span>
                </div>
                <input  id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" style="margin-bottom:20px">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>


            <!-- Confirm Password -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Confirm Password</span>
                </div>
                <input  id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required style="margin-bottom:20px">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
