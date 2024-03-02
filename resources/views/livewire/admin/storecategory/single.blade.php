<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $storecategory->id }}</td>
    <td class="">{{ $storecategory->store_id }}</td>
    <td class="">{{ $storecategory->subcategory_id }}</td>
    <td class="">{{ $storecategory->store->name }}</td>
    <td class="">{{ $storecategory->subcategory->name }}</td>
    
    @if(getCrudConfig('StoreCategory')->delete or getCrudConfig('StoreCategory')->update)
        <td>

            @if(getCrudConfig('StoreCategory')->update && hasPermission(getRouteName().'.storecategory.update', 1, 0, $storecategory))
                <a href="@route(getRouteName().'.storecategory.update', $storecategory->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('StoreCategory')->delete && hasPermission(getRouteName().'.storecategory.delete', 1, 0, $storecategory))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('StoreCategory') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('StoreCategory') ]) }}</p>
                        <div class="mt-5 d-flex justify-content-between">
                            <a wire:click.prevent="delete" class="text-white btn btn-success shadow">{{ __('Yes, Delete it.') }}</a>
                            <a @click.prevent="modalIsOpen = false" class="text-white btn btn-danger shadow">{{ __('No, Cancel it.') }}</a>
                        </div>
                    </div>
                </div>
            @endif
        </td>
    @endif
</tr>
