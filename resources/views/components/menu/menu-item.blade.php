
<ul class="flex flex-wrap justify-center items-center font-medium text-sm">

    <x-menu.menu-item-chip name="Categories" baseRoute="category.detail" :categories="$categories"/>
    <x-menu.menu-item-chip-without-icon name="Stores"  baseRoute="store.detail" :categories="$stores"/>
    <x-menu.menu-item-chip name="Tools"  baseRoute="store.detail" :categories="$categories"/>
    <x-menu.menu-item-chip name="Help"  baseRoute="store.detail" :categories="$categories"/>



    <x-menu.menu-item-chip-without-dropdown name="Submit Offer" url="{{ route('blogs') }}"/>
    <x-menu.menu-item-chip-without-dropdown name="Blog" url="{{ route('blogs') }}"/>


</ul>
