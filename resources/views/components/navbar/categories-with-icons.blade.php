

<section>

    <br />
    <br />
    <br />
    <h2 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl dark:text-white ">Top Categories</h2>

    <div class="relative items-center w-full px-5 mx-auto md:px-12 lg:px-16 max-w-7xl py-14 ">
        <div class="grid grid-cols-2 gap-0.5 md:grid-cols-6 ">


            @foreach($categories as $category)
                <div class="flex flex-col items-center text-center justify-center col-span-1 p-8 border rounded-xl bg-white">
                    <img class="max-h-12  " src="{{ asset('storage/' . $category->icon) }}" alt="logo">
                    {{$category->name}}

                </div>
            @endforeach


        </div>

    </div>
</section>
