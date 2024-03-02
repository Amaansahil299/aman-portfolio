

@extends('layouts.guest')

@section('content')

    <div class="flex mx-9 mt-4 gap-16 ">
        <div class="hidden md:block w-[320px]  ">


            <div class="mb-2 p-3  border border-gray-200 rounded-lg shadow bg-white">


                <div class="flex justify-center">

                    <img class="object-contain object-center w-full h-40 p-12  mx-auto " src="https://windstatic.com/images/logos/8.svg" alt="avatar" />
                </div>

                <div  class="flex justify-center gap-4">

                    <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                        <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        Signup free

                    </button>
                    <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                        <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        Signup free

                    </button>
                </div>


            </div>


            <div href="#" class="block  mb-8 max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">

                <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                    51 Offers Available
                </h3>
                <p class="mt-2 text-gray-500 dark:text-gray-400">
                    +19 Member's Only Offers
                </p>
                <br />
                <x-filters.filter-type-item />
                <x-filters.filter-type-item />
                <x-filters.filter-type-item />
                <x-filters.filter-type-item />



            </div>




            <div href="#" class="block mb-8 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700 ">
                <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-2">
                    Best Buy Offer
                </h3>

                <!-- Rating -->
                <div class="flex items-center">
                    <button type="button" class="w-5 h-5 inline-flex justify-center items-center text-2xl rounded-full text-yellow-400 disabled:opacity-50 disabled:pointer-events-none dark:text-yellow-500">
                        <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                    </button>
                    <button type="button" class="w-5 h-5 inline-flex justify-center items-center text-2xl rounded-full text-yellow-400 disabled:opacity-50 disabled:pointer-events-none dark:text-yellow-500">
                        <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                    </button>
                    <button type="button" class="w-5 h-5 inline-flex justify-center items-center text-2xl rounded-full text-yellow-400 disabled:opacity-50 disabled:pointer-events-none dark:text-yellow-500">
                        <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                    </button>
                    <button type="button" class="w-5 h-5 inline-flex justify-center items-center text-2xl rounded-full text-yellow-400 disabled:opacity-50 disabled:pointer-events-none dark:text-yellow-500">
                        <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                    </button>
                    <button type="button" class="w-5 h-5 inline-flex justify-center items-center text-2xl rounded-full text-gray-300 hover:text-yellow-400 disabled:opacity-50 disabled:pointer-events-none dark:text-gray-600 dark:hover:text-yellow-500">
                        <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                    </button>
                </div>
                <!-- End Rating -->


                <p class="mt-1 text-xs font-medium uppercase text-gray-500 dark:text-gray-500 mt-2">
                    (Click stars to vote4.7 by 7 shoppers)
                </p>

                <p class="mt-2 text-gray-500 dark:text-gray-400">
                    Welcome to our Best Buy coupons page, explore the latest verified bestbuy.com discounts and promos for November 2023. Today, there is a total of 50 Best Buy coupons and discount deals. You can quickly filter today's Best Buy promo codes in order to find exclusive or verified offers. On average, our users save $20 using one of our Best Buy discounts when shopping online. Make sure you also take advantage of today's Best Buy free shipping deal: Up to 50% Off 1,000s of Deals on Early Black Friday Sale. Follow and check our Best Buy coupon page daily for new promo codes, discounts, free shipping deals and more
                </p>


                <div class="flex justify-around gap-4 mb-2 mt-2">
                    <p class="text-sm text-gray-400  text-left">
                        Coupon codes:
                    </p>
                    <p class="text-sm text-gray-400  text-right">
                        16
                    </p>

                </div>



                <div class="flex justify-around gap-4 mb-2">
                    <p class="text-sm text-gray-400  text-left">
                        Coupon codes:
                    </p>
                    <p class="text-sm text-gray-400  text-right">
                        16
                    </p>

                </div>



                <div class="flex justify-around gap-4 mb-2">
                    <p class="text-sm text-gray-400  text-left">
                        Coupon codes:
                    </p>
                    <p class="text-sm text-gray-400  text-right">
                        16
                    </p>

                </div>





                <div class="flex justify-around gap-4 mb-2">
                    <p class="text-sm text-gray-400  text-left">
                        Coupon codes:
                    </p>
                    <p class="text-sm text-gray-400  text-right">
                        16
                    </p>

                </div>

                <button type="button" class="py-3 px-4 inline-flex  flex items-center justify-center w-full text-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    Signup free

                </button>
            </div>



            <div href="#" class="block  mb-8 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700">
                <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-2">
                    Contact Best Buy
                    <hr />

                </h3>
                <p class="font-normal text-gray-700 dark:text-gray-400">7601 Penn Avenue South, Minneapolis, MN, 20166, United States

                </p>

                <p class="font-normal text-gray-700 dark:text-gray-400">+1-612-291-1000

                </p>


            </div>




            <div href="#" class="block  mb-8 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700">
                <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-2">
                    Advertiser Disclosure
                    <hr />

                </h3>
                <p class="font-normal text-gray-700 dark:text-gray-400">
                    If you click on one of our links, we may receive a compensation.
                </p>



            </div>


            <div href="#" class="block  mb-8 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700">
                <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-2">
                    Subscribe!
                    <hr />

                </h3>
                <p class="font-normal text-gray-700 dark:text-gray-400">
                    Get our top coupon codes directly to your inbox.
                </p>



                <div class="relative flex items-center mt-2 mb-2">
                    <span class="absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-3 text-gray-400 dark:text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                    </span>

                    <input type="email" placeholder="john@example.com" class="block w-full py-2.5 text-gray-700 placeholder-gray-400/70 bg-white border border-gray-200 rounded-lg pl-11 pr-5 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                </div>


                <button type="button" class="py-3 px-4 inline-flex  flex items-center justify-center w-full text-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    Signup free

                </button>

            </div>



        </div>


        <div x-data="{ selectedTab: '0' }">
            <div class="flex overflow-x-auto overflow-y-hidden border-b bg-grey-100 border-gray-200 whitespace-nowrap dark:border-gray-700">
                <button @click="selectedTab = '0'" :class="{ 'border-b-2 border-blue-500': selectedTab === '0', 'text-gray-700': selectedTab !== '0' }" class="inline-flex items-center h-10 px-2 py-2 -mb-px text-center bg-transparent  sm:px-4 -px-1 dark:border-blue-400 dark:text-blue-300 whitespace-nowrap focus:outline-none cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mx-1 sm:w-6 sm:h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                    </svg>
                    <span class="mx-1 text-sm sm:text-base">Profile</span>
                </button>

                <button @click="selectedTab = '1'" :class="{ 'border-b-2 border-blue-500': selectedTab === '1', 'text-gray-700': selectedTab !== '1' }" class="inline-flex items-center h-10 px-2 py-2 -mb-px text-center bg-transparent border-b-2 border-transparent sm:px-4 -px-1 dark:text-white whitespace-nowrap cursor-pointer focus:outline-none hover:border-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mx-1 sm:w-6 sm:h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                    </svg>
                    <span class="mx-1 text-sm sm:text-base">Account</span>
                </button>

                <button @click="selectedTab = '2'" :class="{ 'border-b-2 border-blue-500': selectedTab === '2', 'text-gray-700': selectedTab !== '2' }" class="inline-flex items-center h-10 px-2 py-2 -mb-px text-center bg-transparent border-b-2 border-transparent sm:px-4 -px-1 dark:text-white whitespace-nowrap cursor-pointer focus:outline-none hover:border-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mx-1 sm:w-6 sm:h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    <span class="mx-1 text-sm sm:text-base">Notification</span>
                </button>
            </div>


            <x-coupons.top-coupons-list shouldDisplayOneItemAlways="true"/>

        </div>

    </div>

@endsection
