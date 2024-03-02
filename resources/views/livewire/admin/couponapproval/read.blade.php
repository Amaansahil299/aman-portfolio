<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header p-0">
                <h3 class="card-title">{{ __('ListTitle', ['name' => __(\Illuminate\Support\Str::plural('CouponApproval')) ]) }}</h3>

                <div class="px-2 mt-4">

                    <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                        <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                        <li class="breadcrumb-item active">{{ __(\Illuminate\Support\Str::plural('CouponApproval')) }}</li>
                    </ul>

                    <div class="row justify-content-between mt-4 mb-4">
                        @if(getCrudConfig('CouponApproval')->create && hasPermission(getRouteName().'.couponapproval.create', 1, 0))
                        <div class="col-md-4 right-0">
                            <a href="@route(getRouteName().'.couponapproval.create')" class="btn btn-success">{{ __('CreateTitle', ['name' => __('CouponApproval') ]) }}</a>
                        </div>
                        @endif
                        @if(getCrudConfig('CouponApproval')->searchable())
                        <div class="col-md-4">
                            <div class="input-group">
                                <input type="text" class="form-control" @if(config('easy_panel.lazy_mode')) wire:model.lazy="search" @else wire:model="search" @endif placeholder="{{ __('Search') }}" value="{{ request('search') }}">
                                <div class="input-group-append">
                                    <button class="btn btn-default">
                                        <a wire:target="search" wire:loading.remove><i class="fa fa-search"></i></a>
                                        <a wire:loading wire:target="search"><i class="fas fa-spinner fa-spin" ></i></a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="card-body table-responsive p-0">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col" style='cursor: pointer' wire:click="sort('coupon_id')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'coupon_id') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'coupon_id') fa-sort-amount-up ml-2 @endif'></i> {{ __('Coupon_id') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('country_id')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'country_id') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'country_id') fa-sort-amount-up ml-2 @endif'></i> {{ __('Country_id') }} </th>
                            <th scope="col"> {{ __('Coupon Title') }} </th>
                            <th scope="col"> {{ __('Country Name') }} </th>

                            @if(getCrudConfig('CouponApproval')->delete or getCrudConfig('CouponApproval')->update)
                                <th scope="col">{{ __('Action') }}</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($couponapprovals as $couponapproval)
                            @livewire('admin.coupon-approval.single', [$couponapproval], key($couponapproval->id))
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="m-auto pt-3 pr-3">
                {{ $couponapprovals->appends(request()->query())->links() }}
            </div>

            <div wire:loading wire:target="nextPage,gotoPage,previousPage" class="loader-page"></div>

        </div>
    </div>
</div>
