@extends('layouts.guest')

@section('content')


    @vite(['resources/css/signup.css'])



    <div class="relative   flex ">
        <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0 bg-white">
            <div class="sm:w-1/2 xl:w-3/7 h-full hidden md:flex flex-auto items-center justify-center p-10 overflow-hidden  text-white bg-no-repeat bg-cover relative"
                 style="background-image: url(https://plus.unsplash.com/premium_photo-1671076131210-5376fccb100b?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGNvdXBvbnN8ZW58MHx8MHx8fDA%3D);">
                <div class="absolute opacity-90 inset-0"></div>
                <div class="w-full  max-w-md">
                    <div class="sm:text-4xl xl:text-5xl font-bold leading-tight mb-6">Reference site about Lorem Ipsum..</div>
                    <div class="sm:text-sm xl:text-md text-gray-200 font-normal"> What is Lorem Ipsum Lorem Ipsum is simply dummy
                        text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it
                        has?</div>
                </div>
                <!---remove custom style-->
                <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div class="md:flex md:items-center md:justify-center w-full sm:w-auto md:h-full w-2/5 xl:w-2/3 p-8  md:p-10 lg:p-7 sm:rounded-lg md:rounded-none bg-white ">
                <div class="max-w-md w-full space-y-2">
                    <div class="text-center">
                        <h2 class="mt-6 text-3xl font-bold text-gray-900">
                            Sign Up!
                        </h2>
                        <p class="mt-2 text-sm text-gray-500">Please sign up to your account</p>
                    </div>


                    <form method="POST" action="{{ route('register') }}">

                        @csrf

                        <div class="relative">


                            <div>


                                <x-inputs.input-label for="name" :value="__('Name')" class="ml-3 text-sm font-bold text-gray-700 tracking-wide"/>
                                <x-inputs.text-input id="name" class="w-full text-base px-4 py-2 border-b border-gray-300 focus:outline-none rounded-2xl focus:border-indigo-500" type="text" name="name" :value="old('name')" required autofocus autocomplete="username" />
                                <x-inputs.input-error :messages="$errors->get('name')" class="mt-2" />

                            </div>


                        </div>


                        <br />

                        <div class="relative">
                            <div class="absolute right-3 mt-7"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500"
                                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>


                            <div>
                                <x-inputs.input-label for="email" :value="__('Email')" class="ml-3 text-sm font-bold text-gray-700 tracking-wide"/>
                                <x-inputs.text-input id="email" class="w-full text-base px-4 py-2 border-b border-gray-300 focus:outline-none rounded-2xl focus:border-indigo-500"
                                                     type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                <x-inputs.input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>


                        </div>



                        <div class="mt-8 content-center">
                            <x-inputs.input-label for="password" :value="__('Password')" />

                            <x-inputs.text-input id="password" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500"
                                                 type="password"
                                                 name="password"
                                                 required autocomplete="new-password" />

                            <x-inputs.input-error :messages="$errors->get('password')" class="mt-2" />


                        </div>




                        <div class="mt-8 content-center">
                            <x-inputs.input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-inputs.text-input id="password_confirmation" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500"
                                                 type="password"
                                                 name="password_confirmation"
                                                 required autocomplete="new-password" />

                            <x-inputs.input-error :messages="$errors->get('password_confirmation')" class="mt-2" />


                        </div>


                        <div class="flex items-center justify-between mt-2">

                            <div class="text-sm">
                                @if (Route::has('password.request'))

                                    <a class="text-indigo-400 hover:text-blue-500" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>
                                @endif

                            </div>
                        </div>
                        <div>

                            <x-buttons.primary-button class="w-full flex justify-center bg-gradient-to-r from-indigo-500
                             to-blue-600  hover:bg-gradient-to-l hover:from-blue-500 hover:to-indigo-600 text-gray-100 p-4
                              rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500 mt-10" >
                                {{ __('Log in') }}
                            </x-buttons.primary-button>
                        </div>
                        <p class="flex flex-col items-center justify-center mt-10 text-center text-md text-gray-500">
                            <span>Don't have an account?</span>
                            <a href="{{ route('login') }}"
                               class="text-indigo-400 hover:text-blue-500 no-underline hover:underline cursor-pointer transition ease-in duration-300">Sign
                                in</a>



                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>





{{--    <x-navbar.categories-listing />--}}

@endsection


