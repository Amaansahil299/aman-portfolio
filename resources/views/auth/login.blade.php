@extends('layouts.guest')

@section('content')


    @vite(['resources/css/signup.css'])



    <div class="relative   flex ">
        <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0 bg-white">
            <div class="sm:w-3/7 xl:w-3/7 h-full hidden md:flex flex-auto items-center justify-center p-10 overflow-hidden  text-white bg-no-repeat bg-cover relative"
                 style="background-image: url(https://plus.unsplash.com/premium_photo-1671076131210-5376fccb100b?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGNvdXBvbnN8ZW58MHx8MHx8fDA%3D);">
                <div class="absolute  opacity-75 inset-0"></div>
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
                            Welcom Back!
                        </h2>
                        <p class="mt-2 text-sm text-gray-500">Please sign in to your account</p>
                    </div>



                    <div class="flex flex-row justify-center items-center space-x-3 ">

                        <div class=" text-black hover:text-white w-full" >

                            <a href="#" class="border-white-500 w-full group m-auto my-0 inline-flex h-12 items-center justify-center space-x-2 rounded-3xl border px-4 py-2 transition-colors duration-300 hover:border-black hover:bg-black focus:outline-none">
                            <span>
                              <svg class="h-5 w-5 fill-current" viewBox="0 0 16 16" version="1.1" aria-hidden="true">
                                <path fill-rule="text-white" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path>
                              </svg>
                            </span>
                                <span class="text-sm font-medium">Github</span>
                            </a>
                        </div>

                    </div>


                    <div class="flex flex-row justify-center items-center space-x-3 ">

                        <div class=" text-black hover:text-white w-full" >

                            <a href="#" class="border-white-500 w-full group m-auto my-0 inline-flex h-12 items-center justify-center space-x-2 rounded-3xl border px-4 py-2 transition-colors duration-300hover:border-blue-500 hover:bg-blue-500 focus:outline-none">
                            <span>
                              <svg class=""  width="20" height="20" fill="currentColor">
                                <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"></path>
                              </svg>
                            </span>
                                <span class="text-sm font-medium ">Twitter</span>
                            </a>
                        </div>

                    </div>







                    <div class="flex items-center justify-center space-x-2">
                        <span class="h-px w-16 bg-gray-200"></span>
                        <span class="text-gray-300 font-normal">or continue with</span>
                        <span class="h-px w-16 bg-gray-200"></span>
                    </div>


                    <form method="POST" action="{{ route('login') }}" class="">

                        @csrf

                        <input type="hidden" name="remember" value="true">
                        <div class="relative">

{{--                            @if($errors->get('email') )--}}


{{--                            @else--}}
{{--                                <div class="absolute right-3 mt-7"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500"--}}
{{--                                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                                              d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>--}}
{{--                                    </svg>--}}
{{--                                </div>--}}

{{--                            @endif--}}



                            <div>
                                <x-inputs.input-label for="email" :value="__('Email')" class="ml-3 text-sm font-bold text-gray-700 tracking-wide"/>
                                <x-inputs.text-input id="email" class="w-full text-base px-4 py-2 border-b border-gray-300 focus:outline-none rounded-2xl focus:border-indigo-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                <x-inputs.input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>


                        </div>
                        <div class="mt-8 content-center">
                            <x-inputs.input-label for="password" :value="__('Password')" />

                            <x-inputs.text-input id="password" class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500"
                                                 type="password"
                                                 name="password"
                                                 required autocomplete="current-password" />

                            <x-inputs.input-error :messages="$errors->get('password')" class="mt-2" />


                        </div>
                        <div class="flex items-center justify-between mt-2">
                            <div class="flex items-center">


                                <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                                    <input id="remember_me" type="checkbox" name="remember_me"  class="h-4 w-4 bg-blue-500 focus:ring-blue-400 border-gray-300 rounded" name="remember">
                                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                            <div class="text-sm">
                                @if (Route::has('password.request'))
                                    <a class="text-indigo-400 hover:text-blue-500" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif

                            </div>
                        </div>
                        <div>

                            <x-buttons.primary-button class="w-full flex justify-center theme-nav-bg-color text-gray-100 p-4
                              rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500 mt-10" >
                                {{ __('Log in') }}
                            </x-buttons.primary-button>
                        </div>
                        <p class="flex flex-col items-center justify-center mt-10 text-center text-md text-gray-500">
                            <span>Don't have an account?</span>
                            <a href="{{ route('register') }}"
                               class="text-indigo-400 hover:text-blue-500 no-underline hover:underline cursor-pointer transition ease-in duration-300">Sign
                                up</a>



                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <x-navbar.categories-with-icons />


    <x-navbar.categories-listing />

@endsection


