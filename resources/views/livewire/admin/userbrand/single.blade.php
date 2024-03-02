<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $userbrand->id }}</td>
    <td class="">{{ $userbrand->brand->name }}</td>
    <td class="">{{ $userbrand->user->name }}</td>
    <td class="">{{ $userbrand->brand_id }}</td>
    <td class="">{{ $userbrand->user_id }}</td>
    
    @if(getCrudConfig('UserBrand')->delete or getCrudConfig('UserBrand')->update)
        <td>

            @if(getCrudConfig('UserBrand')->update && hasPermission(getRouteName().'.userbrand.update', 1, 0, $userbrand))
                <a href="@route(getRouteName().'.userbrand.update', $userbrand->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('UserBrand')->delete && hasPermission(getRouteName().'.userbrand.delete', 1, 0, $userbrand))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('UserBrand') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('UserBrand') ]) }}</p>
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
