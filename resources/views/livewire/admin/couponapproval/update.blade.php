<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('UpdateTitle', ['name' => __('CouponApproval') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.couponapproval.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('CouponApproval')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Update') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="update" enctype="multipart/form-data">

        <div class="card-body">

                        <!-- Coupon ID Input -->
            <div class='form-group'>
                <label for='input-coupon_id' class='col-sm-2 control-label '> {{ __('Coupon ID') }}</label>
                <input type='number' id='input-coupon_id' wire:model.lazy='coupon_id' class="form-control  @error('coupon_id') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('coupon_id') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Country ID Input -->
            <div class='form-group'>
                <label for='input-country_id' class='col-sm-2 control-label '> {{ __('Country ID') }}</label>
                <input type='number' id='input-country_id' wire:model.lazy='country_id' class="form-control  @error('country_id') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('country_id') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>


        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Update') }}</button>
            <a href="@route(getRouteName().'.couponapproval.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
