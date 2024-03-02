<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $couponapproval->coupon_id }}</td>
    <td class="">{{ $couponapproval->country_id }}</td>
    <td class="">{{ $couponapproval->coupon->title }}</td>
    <td class="">{{ $couponapproval->country->name }}</td>
    
    @if(getCrudConfig('CouponApproval')->delete or getCrudConfig('CouponApproval')->update)
        <td>

            @if(getCrudConfig('CouponApproval')->update && hasPermission(getRouteName().'.couponapproval.update', 1, 0, $couponapproval))
                <a href="@route(getRouteName().'.couponapproval.update', $couponapproval->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('CouponApproval')->delete && hasPermission(getRouteName().'.couponapproval.delete', 1, 0, $couponapproval))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('CouponApproval') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('CouponApproval') ]) }}</p>
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
