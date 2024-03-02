<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $subscriber->id }}</td>
    <td class="">{{ $subscriber->email }}</td>
    <td class=""><span class="badge badge-{{ $subscriber->is_subscribed ? 'success' : 'danger' }} font-14  badge-pill ">{{ $subscriber->is_subscribed ? __('Subscribed :)') : __('Not Subscribed :(') }}</span></td>
    
    @if(getCrudConfig('Subscriber')->delete or getCrudConfig('Subscriber')->update)
        <td>

            @if(getCrudConfig('Subscriber')->update && hasPermission(getRouteName().'.subscriber.update', 1, 0, $subscriber))
                <a href="@route(getRouteName().'.subscriber.update', $subscriber->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('Subscriber')->delete && hasPermission(getRouteName().'.subscriber.delete', 1, 0, $subscriber))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Subscriber') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('Subscriber') ]) }}</p>
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
