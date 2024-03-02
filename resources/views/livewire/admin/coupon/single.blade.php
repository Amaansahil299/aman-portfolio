<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $coupon->title }}</td>
    <td class="">{{ $coupon->description_1 }}</td>
    <td class="">{{ $coupon->description_2 }}</td>
    <td class="">{{ $coupon->description_3 }}</td>
    <td class="">{{ $coupon->term_1 }}</td>
    <td class="">{{ $coupon->term_2 }}</td>
    <td class="">{{ $coupon->term_3 }}</td>
    <td class="">{{ $coupon->term_4 }}</td>
    <td class="">{{ $coupon->term_5 }}</td>
    <td class="">{{ $coupon->term_6 }}</td>
    <td class="">{{ $coupon->specification_title }}</td>
    <td class="">{{ $coupon->rating }}</td>
    <td class="">{{ $coupon->start_datetime }}</td>
    <td class="">{{ $coupon->end_datetime }}</td>
    <td class="">{{ $coupon->thumbnail }}</td>
    <td class=""><span class="badge badge-{{ $coupon->is_verified ? 'success' : 'danger' }} font-14  badge-pill ">{{ $coupon->is_verified ? __('Verified :)') : __('Not Verified :(') }}</span></td>
    <td class="">{{ $coupon->verified_at }}</td>
    <td class="">{{ $coupon->url }}</td>
    
    @if(getCrudConfig('Coupon')->delete or getCrudConfig('Coupon')->update)
        <td>

            @if(getCrudConfig('Coupon')->update && hasPermission(getRouteName().'.coupon.update', 1, 0, $coupon))
                <a href="@route(getRouteName().'.coupon.update', $coupon->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('Coupon')->delete && hasPermission(getRouteName().'.coupon.delete', 1, 0, $coupon))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Coupon') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('Coupon') ]) }}</p>
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
