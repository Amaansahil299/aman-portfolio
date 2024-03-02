<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('CreateTitle', ['name' => __('StoreCategory') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.storecategory.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('StoreCategory')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Create') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="create" enctype="multipart/form-data">

        <div class="card-body">
                        <!-- Coupon ID Input -->
            <div class='form-group'>
                <label for='input-store_id' class='col-sm-2 control-label '> {{ __('Coupon ID') }}</label>
                <input type='number' id='input-store_id' wire:model.lazy='store_id' class="form-control  @error('store_id') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('store_id') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Country ID Input -->
            <div class='form-group'>
                <label for='input-subcategory_id' class='col-sm-2 control-label '> {{ __('Country ID') }}</label>
                <input type='number' id='input-subcategory_id' wire:model.lazy='subcategory_id' class="form-control  @error('subcategory_id') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('subcategory_id') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Create') }}</button>
            <a href="@route(getRouteName().'.storecategory.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
