<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header p-0">
                <h3 class="card-title">{{ __('ListTitle', ['name' => __(\Illuminate\Support\Str::plural('Coupon')) ]) }}</h3>

                <div class="px-2 mt-4">

                    <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                        <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                        <li class="breadcrumb-item active">{{ __(\Illuminate\Support\Str::plural('Coupon')) }}</li>
                    </ul>

                    <div class="row justify-content-between mt-4 mb-4">
                        @if(getCrudConfig('Coupon')->create && hasPermission(getRouteName().'.coupon.create', 1, 0))
                        <div class="col-md-4 right-0">
                            <a href="@route(getRouteName().'.coupon.create')" class="btn btn-success">{{ __('CreateTitle', ['name' => __('Coupon') ]) }}</a>
                        </div>
                        @endif
                        @if(getCrudConfig('Coupon')->searchable())
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
                            <th scope="col" style='cursor: pointer' wire:click="sort('title')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'title') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'title') fa-sort-amount-up ml-2 @endif'></i> {{ __('Title') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('description_1')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'description_1') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'description_1') fa-sort-amount-up ml-2 @endif'></i> {{ __('Description_1') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('description_2')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'description_2') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'description_2') fa-sort-amount-up ml-2 @endif'></i> {{ __('Description_2') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('description_3')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'description_3') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'description_3') fa-sort-amount-up ml-2 @endif'></i> {{ __('Description_3') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('term_1')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'term_1') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'term_1') fa-sort-amount-up ml-2 @endif'></i> {{ __('Term_1') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('term_2')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'term_2') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'term_2') fa-sort-amount-up ml-2 @endif'></i> {{ __('Term_2') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('term_3')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'term_3') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'term_3') fa-sort-amount-up ml-2 @endif'></i> {{ __('Term_3') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('term_4')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'term_4') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'term_4') fa-sort-amount-up ml-2 @endif'></i> {{ __('Term_4') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('term_5')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'term_5') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'term_5') fa-sort-amount-up ml-2 @endif'></i> {{ __('Term_5') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('term_6')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'term_6') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'term_6') fa-sort-amount-up ml-2 @endif'></i> {{ __('Term_6') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('specification_title')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'specification_title') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'specification_title') fa-sort-amount-up ml-2 @endif'></i> {{ __('Specification_title') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('rating')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'rating') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'rating') fa-sort-amount-up ml-2 @endif'></i> {{ __('Rating') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('start_datetime')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'start_datetime') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'start_datetime') fa-sort-amount-up ml-2 @endif'></i> {{ __('Start_datetime') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('end_datetime')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'end_datetime') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'end_datetime') fa-sort-amount-up ml-2 @endif'></i> {{ __('End_datetime') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('thumbnail')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'thumbnail') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'thumbnail') fa-sort-amount-up ml-2 @endif'></i> {{ __('Thumbnail') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('is_verified')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'is_verified') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'is_verified') fa-sort-amount-up ml-2 @endif'></i> {{ __('Is Verified') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('verified_at')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'verified_at') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'verified_at') fa-sort-amount-up ml-2 @endif'></i> {{ __('Verified_at') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('url')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'url') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'url') fa-sort-amount-up ml-2 @endif'></i> {{ __('Url') }} </th>
                            
                            @if(getCrudConfig('Coupon')->delete or getCrudConfig('Coupon')->update)
                                <th scope="col">{{ __('Action') }}</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($coupons as $coupon)
                            @livewire('admin.coupon.single', [$coupon], key($coupon->id))
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="m-auto pt-3 pr-3">
                {{ $coupons->appends(request()->query())->links() }}
            </div>

            <div wire:loading wire:target="nextPage,gotoPage,previousPage" class="loader-page"></div>

        </div>
    </div>
</div>
