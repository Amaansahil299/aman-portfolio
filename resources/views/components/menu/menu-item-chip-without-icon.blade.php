<li
        class="p-4 lg:px-8 relative flex items-center space-x-1"
        x-data="{ open: false }"
        @mouseenter="open = true"
        @mouseleave="open = false"
>
    <div class="relative">

        <a
                class="text-slate-800 hover:text-slate-900"
                href="#0"
                :aria-expanded="open"
        >{{$name}}</a>
        <button
                class="shrink-0 p-1"
                :aria-expanded="open"
                @click.prevent="open = !open"
        >
            <span class="sr-only">Show submenu for "Flyout Menu"</span>
            <svg class="w-3 h-3 fill-slate-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                <path d="M10 2.586 11.414 4 6 9.414.586 4 2 2.586l4 4z" />
            </svg>
        </button>
        <!-- 2nd level menu -->
        <ul
                class="origin-top-right absolute top-full left-1/2 -translate-x-1/2 min-w-[240px] bg-white border border-slate-200 p-2 rounded-lg shadow-xl [&[x-cloak]]:hidden z-30"
                x-show="open"
                x-transition:enter="transition ease-out duration-200 transform"
                x-transition:enter-start="opacity-0 -translate-y-2"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-out duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                x-cloak
                @focusout="await $nextTick();!$el.contains($focus.focused()) && (open = false)"
        >









            @foreach ($categories as $category)

                <x-menu.menu-item-tile
                        name="{{$category->name}}"
                        base-route="{{$baseRoute}}"
                        id="{{ $category->id }}"
                />

            @endforeach


        </ul>
    </div>
</li>
