


<section class="theme-bg-color">
    <div class="container px-6 py-8 mx-auto">
        <h2 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-2xl dark:text-white">Free Online Coupons and Promo Codes for the Store You Love!</h2>

        @if($shouldDisplayOneItemAlways)
            <div class="grid gap-8 mt-8 sm:grid-cols-1 lg:grid-cols-1 md:grid-cols-1 xl:grid-cols-1 ">
        @else
            <div class="grid gap-8 mt-8 sm:grid-cols-1 lg:grid-cols-2 md:grid-cols-1 xl:grid-cols-2 ">
        @endif


                @foreach($coupons as $coupon)
                    <x-coupons.top-coupons-list-item :coupon="$coupon"/>

                @endforeach




        </div>
    </div>
</section>
