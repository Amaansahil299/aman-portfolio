<li >
    <a class="text-slate-800 bg-slate-50 hover:bg-slate-100 flex items-center  hover:shadow p-2 rounded mt-1" href="{{ route($baseRoute, ['id' => $id]) }}">
        @if(isset($iconUrl))
            <div class=" flex justify-center items-center w-12 h-12 bg-slate-200 p-3 rounded-full">

                <img src="{{ asset('storage/' . $iconUrl) }}" />

            </div>
        @else


        @endif

        <div class="ml-4">
            <p class="text-base font-medium text-black">
                {{ $name }}
            </p>

        </div>
    </a>
</li>
