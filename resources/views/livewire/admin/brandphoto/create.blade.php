<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('CreateTitle', ['name' => __('BrandPhoto') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.brandphoto.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('BrandPhoto')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Create') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="create" enctype="multipart/form-data">

        <div class="card-body">
                        <!-- Title Input -->
            <div class='form-group'>
                <label for='input-title' class='col-sm-2 control-label '> {{ __('Title') }}</label>
                <input type='text' id='input-title' wire:model.lazy='title' class="form-control  @error('title') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('title') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Description Input -->
            <div class='form-group'>
                <label for='input-description' class='col-sm-2 control-label '> {{ __('Description') }}</label>
                <textarea id="input-description" wire:model.lazy='description' class="form-control  @error('description') is-invalid @enderror" placeholder='' autocomplete='on'></textarea>
                @error('description') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- URL  Input -->
            <div class='form-group'>
                <label for='input-url' class='col-sm-2 control-label '> {{ __('URL ') }}</label>
                <input type='text' id='input-url' wire:model.lazy='url' class="form-control  @error('url') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('url') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Brand ID  Input -->
            <div class='form-group'>
                <label for='input-brand_id' class='col-sm-2 control-label '> {{ __('Brand ID ') }}</label>
                <input type='number' id='input-brand_id' wire:model.lazy='brand_id' class="form-control  @error('brand_id') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('brand_id') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Create') }}</button>
            <a href="@route(getRouteName().'.brandphoto.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
