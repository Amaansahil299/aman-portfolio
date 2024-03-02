<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $restriction->id }}</td>
    <td class="">{{ $restriction->name }}</td>
    <td class="">{{ $restriction->description }}</td>
    
    @if(getCrudConfig('Restriction')->delete or getCrudConfig('Restriction')->update)
        <td>

            @if(getCrudConfig('Restriction')->update && hasPermission(getRouteName().'.restriction.update', 1, 0, $restriction))
                <a href="@route(getRouteName().'.restriction.update', $restriction->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('Restriction')->delete && hasPermission(getRouteName().'.restriction.delete', 1, 0, $restriction))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Restriction') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('Restriction') ]) }}</p>
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
