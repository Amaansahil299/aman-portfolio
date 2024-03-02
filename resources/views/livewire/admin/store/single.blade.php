<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $store->id }}</td>
    <td class="">{{ $store->name }}</td>
    <td class="">{{ $store->introduction }}</td>
    <td class="">{{ $store->address }}</td>
    <td class="">{{ $store->disclosure }}</td>
    <td class="">{{ $store->store_url }}</td>
    <td class="">{{ $store->icon }}</td>
    
    @if(getCrudConfig('Store')->delete or getCrudConfig('Store')->update)
        <td>

            @if(getCrudConfig('Store')->update && hasPermission(getRouteName().'.store.update', 1, 0, $store))
                <a href="@route(getRouteName().'.store.update', $store->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('Store')->delete && hasPermission(getRouteName().'.store.delete', 1, 0, $store))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Store') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('Store') ]) }}</p>
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
