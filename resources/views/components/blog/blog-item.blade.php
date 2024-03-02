<div class="p-4 md:w-1/3  wow fadeInUp "   data-wow-delay=".1s" >
    <div class="h-full rounded-xl shadow-cla-blue bg-gradient-to-r from-indigo-50 to-blue-50 overflow-hidden border-[1px] border-opacity-10 border-black shadow-lg ">
        <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100" src="{{ asset('storage/' . $thumbnail) }}" alt="blog">
        <div class="p-6 ">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY-1</h2>
            <h1 class="title-font text-lg font-medium text-gray-600 mb-3">{{ $title }}</h1>
            <p class="leading-relaxed mb-3">{{ $shortDescription }}</p>
            <div class="flex items-center flex-wrap ">
                <a class="bg-gradient-to-r from-cyan-400 to-blue-400 hover:scale-105 drop-shadow-md  shadow-cla-blue px-4 py-1 rounded-lg" href="{{ route("blogs-detail", ['id' => $id]) }}">Learn more</a>

            </div>
        </div>
    </div>
</div>
