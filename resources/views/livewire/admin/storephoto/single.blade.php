<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $storephoto->id }}</td>
    <td class="">{{ $storephoto->title }}</td>
    <td class="">{{ $storephoto->description }}</td>
    <td class="">{{ $storephoto->url }}</td>
    
    @if(getCrudConfig('StorePhoto')->delete or getCrudConfig('StorePhoto')->update)
        <td>

            @if(getCrudConfig('StorePhoto')->update && hasPermission(getRouteName().'.storephoto.update', 1, 0, $storephoto))
                <a href="@route(getRouteName().'.storephoto.update', $storephoto->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('StorePhoto')->delete && hasPermission(getRouteName().'.storephoto.delete', 1, 0, $storephoto))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('StorePhoto') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('StorePhoto') ]) }}</p>
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
