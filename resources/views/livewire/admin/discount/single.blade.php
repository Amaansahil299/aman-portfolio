<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $discount->id }}</td>
    <td class="">{{ $discount->name }}</td>
    <td class="">{{ $discount->description }}</td>
    
    @if(getCrudConfig('Discount')->delete or getCrudConfig('Discount')->update)
        <td>

            @if(getCrudConfig('Discount')->update && hasPermission(getRouteName().'.discount.update', 1, 0, $discount))
                <a href="@route(getRouteName().'.discount.update', $discount->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('Discount')->delete && hasPermission(getRouteName().'.discount.delete', 1, 0, $discount))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Discount') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('Discount') ]) }}</p>
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
