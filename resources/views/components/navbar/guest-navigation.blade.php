
<header x-data="{ isOpen: false,  isOpenSearchBox: false  }" class=" shadow" x-init="">

        <div
                x-cloak
                x-show="isOpenSearchBox"
                x-on:click="isOpenSearchBox = false"

                class="fixed  inset-0 bg-black bg-opacity-50 z-10"
        ></div>
    <nav class="   py-3 theme-nav-bg-color ">
        <div class="flex px-1 md:px-20 lg:px-36 xl:px-40 flex-col justify-between  md:flex-row items-center ">
            <div class="flex justify-between items-center w-full ">
                <div class="flex items-center flex-grow" >
                    <a class="text-white text-xl hidden md:block font-bold md:text-2xl hover:text-gray-400" href="{{ route('welcome') }}">
                        CouponsPoint
                    </a>
                    <div class="mx-10  flex flex-grow  relative z-10 " >


                        <!-- Results -->

                        <div class="relative flex flex-grow">
                            <input
                                    type="text"
                                    name="search-query"
                                    :class="[!isOpenSearchBox ? 'transition-transform duration-300 scale-[1.0]' : '', isOpenSearchBox ? ' transition-transform duration-300 scale-[1.02]' : '']"
                                    class="w-full pr-10 shadow-lg px-4 py-3 leading-tight text-sm text-gray-700 bg-gray-100 rounded-full border-0 placeholder-gray-500"
                                    placeholder="Search for stores, offers or brands..."
                                    aria-label="Search"
                                    x-on:focus="isOpenSearchBox = true"
                            />
                            <!-- Search icon -->
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <svg class="h-4 w-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-5.2-5.2"></path>
                                    <circle cx="10" cy="10" r="8"></circle>
                                </svg>
                            </div>
                        </div>




                        <div
                                x-cloak
                                x-show="isOpenSearchBox"
                                @click="isOpenSearchBox = true;"
                            class="absolute mt-12 w-full bg-white rounded-md shadow-lg "
                        >

                            <x-common.loader-component />
                            <!-- Tabla -->
                            <div class="bg-white rounded-lg p-4 shadow-md my-4">
                                <table class="table-auto w-full">
                                    <thead>
                                    <tr>
                                        <th class="px-4 py-2 text-left border-b-2 w-full">
                                            <h2 class="text-ml font-bold text-gray-600">Recommended Stores</h2>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="border-b w-full">
                                       <td class="">
                                           <div class="flex items-center">
                                               <div class="py-5 px-4">
                                                   <img
                                                       class="h-[83px] w-[83px] rounded-lg"
                                                       src="https://github.com/horizon-ui/horizon-tailwind-react-ts-corporate/blob/main/src/assets/img/profile/image2.png?raw=true"
                                                       alt=""
                                                   />
                                               </div>
                                               <div class="ml-4">
                                                   <p class="text-base font-medium text-navy-700 dark:text-white">
                                                       Technology behind the Blockchain
                                                   </p>
                                                   <p class="mt-2 text-sm text-gray-600">
                                                       Project #1 .
                                                       <a
                                                           class="ml-1 font-medium text-brand-500 hover:text-brand-500 dark:text-white"
                                                           href=" "
                                                       >
                                                           See product details
                                                       </a>
                                                   </p>
                                               </div>
                                           </div>
                                       </td>

                                    </tr>
                                    <tr class="border-b w-full">
                                    <tr class="border-b w-full">
                                       <td class="">
                                           <div class="flex items-center">
                                               <div class="py-5 px-4">
                                                   <img
                                                       class="h-[83px] w-[83px] rounded-lg"
                                                       src="https://github.com/horizon-ui/horizon-tailwind-react-ts-corporate/blob/main/src/assets/img/profile/image2.png?raw=true"
                                                       alt=""
                                                   />
                                               </div>
                                               <div class="ml-4">
                                                   <p class="text-base font-medium text-navy-700 dark:text-white">
                                                       Technology behind the Blockchain
                                                   </p>
                                                   <p class="mt-2 text-sm text-gray-600">
                                                       Project #1 .
                                                       <a
                                                           class="ml-1 font-medium text-brand-500 hover:text-brand-500 dark:text-white"
                                                           href=" "
                                                       >
                                                           See product details
                                                       </a>
                                                   </p>
                                               </div>
                                           </div>
                                       </td>

                                    </tr>
                                    <tr class="border-b w-full">
                                       <td class="">
                                           <div class="flex items-center">
                                               <div class="py-5 px-4">
                                                   <img
                                                       class="h-[83px] w-[83px] rounded-lg"
                                                       src="https://github.com/horizon-ui/horizon-tailwind-react-ts-corporate/blob/main/src/assets/img/profile/image2.png?raw=true"
                                                       alt=""
                                                   />
                                               </div>
                                               <div class="ml-4">
                                                   <p class="text-base font-medium text-navy-700 dark:text-white">
                                                       Technology behind the Blockchain
                                                   </p>
                                                   <p class="mt-2 text-sm text-gray-600">
                                                       Project #1 .
                                                       <a
                                                           class="ml-1 font-medium text-brand-500 hover:text-brand-500 dark:text-white"
                                                           href=" "
                                                       >
                                                           See product details
                                                       </a>
                                                   </p>
                                               </div>
                                           </div>
                                       </td>

                                    </tr>

                                    </tbody>
                                </table>



                                <table class="table-auto w-full">
                                    <thead>
                                    <tr>
                                        <th class="px-4 py-2 text-left border-b-2 w-full">
                                            <h2 class="text-ml font-bold text-gray-600">Popular Categories</h2>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td class="flex justify-start flex-wrap  pt-6">




                                                <x-common.chip-tag/>
                                                <x-common.chip-tag />
                                                <x-common.chip-tag />
                                                <x-common.chip-tag />
                                                <x-common.chip-tag />
                                                <x-common.chip-tag />
                                                <x-common.chip-tag />
                                                <x-common.chip-tag />
                                                <x-common.chip-tag />
                                                <x-common.chip-tag />
                                                <x-common.chip-tag />
                                                <x-common.chip-tag />
                                                <x-common.chip-tag />
                                                <x-common.chip-tag />
                                                <x-common.chip-tag />
                                                <x-common.chip-tag />
                                                <x-common.chip-tag />
                                                <x-common.chip-tag />
                                                <x-common.chip-tag />
                                                <x-common.chip-tag />
                                                <x-common.chip-tag />
                                                <x-common.chip-tag />
                                                <x-common.chip-tag />




                                            </td>
                                        </tr>

                                    </tbody>
                                </table>


                            </div>

                        </div>
                    </div>


                </div>

                <!-- Mobile menu button -->
                <div class="flex md:hidden"  x-data="{ isHovering: false }">
                    <button
                        @mouseover="isHovering = true"
                        @mouseout="isHovering = false"
                        :class="{ 'hovered': isHovering }"
                        @click="isOpen = !isOpen"
                        type="button"
                        class="text-white focus:outline-none transition-transform duration-300 transform hover:scale-125"
                        aria-label="toggle menu"
                    >
                        <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                            <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                        </svg>
                    </button>
                </div>



            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div class="md:flex items-center" :class="isOpen ? 'block' : 'hidden'">
                <div class="flex flex-col mt-2 md:flex-row md:mt-0 md:mx-1">

                </div>

                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown.dropdown-link :href="route('logout')"
                                                  onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown.dropdown-link>
                    </form>

                @else

                    <div class="flex items-center py-2 -mx-1 md:mx-0">
                        <a class="block w-1/2 px-3 py-2 mx-1 rounded text-center text-sm bg-gray-500 font-medium text-white leading-5 hover:bg-blue-600 md:mx-2 md:w-auto" href="{{ route('login') }}">Login</a>
                        <a class="block w-1/2 px-3 py-2 mx-1 rounded text-center text-sm bg-blue-500 font-medium text-white leading-5 hover:bg-blue-600 md:mx-0 md:w-auto" href="{{ route('register') }}">Join Now</a>
                    </div>

                @endauth


            </div>
        </div>

    </nav>



        <div class="w-full mx-auto px-4 md:px-6 bg-gray-200 ">

            <!-- Menu -->
            <nav class="flex justify-center">

                <x-menu.menu-item />
            </nav>
            <!-- End: Menu -->

        </div>
{{--    </main>--}}
</header>


@if(Route::currentRouteName() == 'welcome')



@else




    <section>
        <div class="items-center  mx-auto max-w-7xl">
            <div class="justify-center w-full mx-auto">
                <nav class="flex py-3 border-y" aria-label="Breadcrumb">
                    <ol role="list" class="flex items-center space-x-4">
                        <li>
                            <div class="flex items-center">
                                <a href="#" class="inline-flex items-center text-sm font-medium text-gray-500 duration-200 hover:text-gray-700 hover:scale-95">
                                    <ion-icon class="flex-shrink-0 w-4 h-4 md hydrated" name="home-outline" role="img" aria-label="home outline"></ion-icon>
                                    <span class="ml-4">
                                Home
                              </span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                            <span class="flex-shrink-0 w-5 h-5 text-gray-300">
                              /
                            </span>
                                <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:scale-95 hover:text-gray-700">
                                    Blogs
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                            <span class="flex-shrink-0 w-5 h-5 text-gray-300">
                              /
                            </span>
                                <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:scale-95 hover:text-gray-700">
                                    Detail
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                            <span class="flex-shrink-0 w-5 h-5 text-gray-300">
                              /
                            </span>
                                <a href="#" class="ml-4 text-sm font-medium text-blue-500 hover:scale-95 hover:text-gray-700" aria-current="page">
                                    Current
                                </a>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

@endif

