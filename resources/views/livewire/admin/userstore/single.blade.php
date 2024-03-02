<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $userstore->id }}</td>
    <td class="">{{ $userstore->store->name }}</td>
    <td class="">{{ $userstore->user->name }}</td>
    <td class="">{{ $userstore->store_id }}</td>
    <td class="">{{ $userstore->user_id }}</td>
    
    @if(getCrudConfig('UserStore')->delete or getCrudConfig('UserStore')->update)
        <td>

            @if(getCrudConfig('UserStore')->update && hasPermission(getRouteName().'.userstore.update', 1, 0, $userstore))
                <a href="@route(getRouteName().'.userstore.update', $userstore->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('UserStore')->delete && hasPermission(getRouteName().'.userstore.delete', 1, 0, $userstore))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('UserStore') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('UserStore') ]) }}</p>
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
