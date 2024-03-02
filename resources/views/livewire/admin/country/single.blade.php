<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $country->name }}</td>
    <td class="">{{ $country->code }}</td>
    
    @if(getCrudConfig('Country')->delete or getCrudConfig('Country')->update)
        <td>

            @if(getCrudConfig('Country')->update && hasPermission(getRouteName().'.country.update', 1, 0, $country))
                <a href="@route(getRouteName().'.country.update', $country->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('Country')->delete && hasPermission(getRouteName().'.country.delete', 1, 0, $country))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Country') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('Country') ]) }}</p>
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
