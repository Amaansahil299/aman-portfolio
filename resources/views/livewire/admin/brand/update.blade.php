<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('UpdateTitle', ['name' => __('Brand') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.brand.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Brand')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Update') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="update" enctype="multipart/form-data">

        <div class="card-body">

                        <!-- Name Input -->
            <div class='form-group'>
                <label for='input-name' class='col-sm-2 control-label '> {{ __('Name') }}</label>
                <input type='text' id='input-name' wire:model.lazy='name' class="form-control  @error('name') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('name') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- URL Input -->
            <div class='form-group'>
                <label for='input-url' class='col-sm-2 control-label '> {{ __('URL') }}</label>
                <input type='text' id='input-url' wire:model.lazy='url' class="form-control  @error('url') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('url') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- StoreID  Input -->
            <div class='form-group'>
                <label for='input-store_id' class='col-sm-2 control-label '> {{ __('StoreID ') }}</label>
                <input type='number' id='input-store_id' wire:model.lazy='store_id' class="form-control  @error('store_id') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('store_id') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>


        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Update') }}</button>
            <a href="@route(getRouteName().'.brand.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
