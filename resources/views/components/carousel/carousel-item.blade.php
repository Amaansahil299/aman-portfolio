<div id="{{ $id }}" class=" mx-auto">
    <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill" style="background-image: url({{$imageUrl}})">
        <div class="md:w-1/2">
            <p class="font-bold text-sm uppercase">{{ $subtitle1 }}</p>
            <p class="text-3xl font-bold">{{ $subtitle2 }}</p>
            <p class="text-2xl mb-10 leading-none"> {{ $description  }}</p>
            <a href="#" class="theme-nav-bg-color bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">{{ $btnTitle }}</a>
        </div>
    </div> <!-- container -->
    <br>
</div>
