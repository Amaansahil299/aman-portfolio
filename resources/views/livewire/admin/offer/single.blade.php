<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $offer->id }}</td>
    <td class="">{{ $offer->name }}</td>
    <td class="">{{ $offer->description }}</td>
    
    @if(getCrudConfig('Offer')->delete or getCrudConfig('Offer')->update)
        <td>

            @if(getCrudConfig('Offer')->update && hasPermission(getRouteName().'.offer.update', 1, 0, $offer))
                <a href="@route(getRouteName().'.offer.update', $offer->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('Offer')->delete && hasPermission(getRouteName().'.offer.delete', 1, 0, $offer))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Offer') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('Offer') ]) }}</p>
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
