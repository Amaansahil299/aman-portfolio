<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $couponfeedback->id }}</td>
    <td class="">{{ $couponfeedback->coupon_id }}</td>
    <td class="">{{ $couponfeedback->user_id }}</td>
    <td class=""><span class="badge badge-{{ $couponfeedback->is_working ? 'success' : 'danger' }} font-14  badge-pill ">{{ $couponfeedback->is_working ? __('Working :)') : __('Not Working :(') }}</span></td>
    
    @if(getCrudConfig('CouponFeedback')->delete or getCrudConfig('CouponFeedback')->update)
        <td>

            @if(getCrudConfig('CouponFeedback')->update && hasPermission(getRouteName().'.couponfeedback.update', 1, 0, $couponfeedback))
                <a href="@route(getRouteName().'.couponfeedback.update', $couponfeedback->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('CouponFeedback')->delete && hasPermission(getRouteName().'.couponfeedback.delete', 1, 0, $couponfeedback))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('CouponFeedback') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('CouponFeedback') ]) }}</p>
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
