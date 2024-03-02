

<div class="sliderAx h-auto  wow fadeInUp"  data-wow-delay=".2s">


    <x-carousel.carousel-item id="slider-1" subtitle1="Services" subtitle2="Hello world" btn-title="Contact us"
                     description="Carousel with TailwindCSS and jQuery"
                     image-url="https://images.unsplash.com/photo-1544427920-c49ccfb85579?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1422&q=80"></x-carousel.carousel-item>
    <x-carousel.carousel-item id="slider-2" subtitle1="Count" subtitle2="Hello wifey"
                     btn-title="Help us" description="Carousel with TailwindCSS and jQuery And"
                     image-url="https://images.unsplash.com/photo-1544144433-d50aff500b91?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80"></x-carousel.carousel-item>


</div>
<div  class="flex justify-between w-12 mx-auto pb-4 wow fadeInUp">
    <button id="sButton1" onclick="sliderButton1()" class="bg-purple-400 rounded-full w-4 pb-2"></button>
    <button id="sButton2" onclick="sliderButton2()" class="bg-purple-400 rounded-full w-4 p-2"></button>
</div>

<div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    @vite(['resources/js/carousel.js'])
</div>

