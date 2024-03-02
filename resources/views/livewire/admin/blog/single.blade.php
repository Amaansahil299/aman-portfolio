<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $blog->short_description }}</td>
    <td class="">{{ $blog->title }}</td>
    <td><img class="img-fluid  rounded-circle " width="50" height="50" src="{{ asset($blog->thumbnail) }}" alt="Thumbnail"></td>
    <td class=""><span class="badge badge-info font-14 ">{{ $blog->user->name }}</span></td>
    
    @if(getCrudConfig('Blog')->delete or getCrudConfig('Blog')->update)
        <td>

            @if(getCrudConfig('Blog')->update && hasPermission(getRouteName().'.blog.update', 1, 0, $blog))
                <a href="@route(getRouteName().'.blog.update', $blog->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('Blog')->delete && hasPermission(getRouteName().'.blog.delete', 1, 0, $blog))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Blog') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('Blog') ]) }}</p>
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
