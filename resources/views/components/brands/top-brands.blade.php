

<section class="theme-bg-color wow fadeInUp  "   data-wow-delay=".2s">
    <div class="container px-6 py-8 mx-auto">
        <h2 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl dark:text-white">Free Online Coupons and Promo Codes for the Store You Love!</h2>


        <div class="grid gap-8 mt-8 mx-14 sm:grid-cols-2 lg:grid-cols-6 xl:grid-cols-6 flex justify-center">




            @foreach($top_limited_brands as $brand)

                <div class="w-full max-w-xs text-center bg-white rounded-2xl  border-[3px] border-opacity-10 border-black ">

                    <img class="object-contain object-center w-full h-40 p-4  mx-auto " src="https://windstatic.com/images/logos/{{$loop->index + 1}}.svg" alt="avatar" />

                    <div class="mt-2 mb-2 px-2">
                        <h3 class="text-sm font-bold text-gray-700 dark:text-gray-200 ">{{ $brand->name }}</h3>
                    </div>
                </div>



            @endforeach


        </div>
    </div>
</section>
