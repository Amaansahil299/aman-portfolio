<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $brandphoto->title }}</td>
    <td class="">{{ $brandphoto->description }}</td>
    <td class="">{{ $brandphoto->url }}</td>
    <td class="">{{ $brandphoto->brand->name }}</td>
    
    @if(getCrudConfig('BrandPhoto')->delete or getCrudConfig('BrandPhoto')->update)
        <td>

            @if(getCrudConfig('BrandPhoto')->update && hasPermission(getRouteName().'.brandphoto.update', 1, 0, $brandphoto))
                <a href="@route(getRouteName().'.brandphoto.update', $brandphoto->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('BrandPhoto')->delete && hasPermission(getRouteName().'.brandphoto.delete', 1, 0, $brandphoto))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('BrandPhoto') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('BrandPhoto') ]) }}</p>
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
