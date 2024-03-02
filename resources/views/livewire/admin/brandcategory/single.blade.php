<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $brandcategory->brand->name }}</td>
    <td class="">{{ $brandcategory->subcategory->name }}</td>
    
    @if(getCrudConfig('BrandCategory')->delete or getCrudConfig('BrandCategory')->update)
        <td>

            @if(getCrudConfig('BrandCategory')->update && hasPermission(getRouteName().'.brandcategory.update', 1, 0, $brandcategory))
                <a href="@route(getRouteName().'.brandcategory.update', $brandcategory->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('BrandCategory')->delete && hasPermission(getRouteName().'.brandcategory.delete', 1, 0, $brandcategory))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('BrandCategory') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('BrandCategory') ]) }}</p>
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
