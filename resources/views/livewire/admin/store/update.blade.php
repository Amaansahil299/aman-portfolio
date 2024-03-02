<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('UpdateTitle', ['name' => __('Store') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.store.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Store')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Update') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="update" enctype="multipart/form-data">

        <div class="card-body">

                        <!-- Icon Input -->
            <div class='form-group'>
                <label for='input-icon' class='col-sm-2 control-label '> {{ __('Icon') }}</label>
                <input type='file' id='input-icon' wire:model='icon' class="form-control-file  @error('icon') is-invalid @enderror">
                @if($icon and !$errors->has('icon') and $icon instanceof Illuminate\Http\UploadedFile and $icon->isPreviewable())
                    <a href="{{ $icon->temporaryUrl() }}" target="_blank"><img width="200" height="200" class="mt-3 img-fluid shadow" src="{{ $icon->temporaryUrl() }}" alt=""></a>
                @endif
                @error('icon') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Name Input -->
            <div class='form-group'>
                <label for='input-name' class='col-sm-2 control-label '> {{ __('Name') }}</label>
                <input type='text' id='input-name' wire:model.lazy='name' class="form-control  @error('name') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('name') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Introduction Input -->
            <div class='form-group'>
                <label for='input-introduction' class='col-sm-2 control-label '> {{ __('Introduction') }}</label>
                <input type='text' id='input-introduction' wire:model.lazy='introduction' class="form-control  @error('introduction') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('introduction') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Address Input -->
            <div class='form-group'>
                <label for='input-address' class='col-sm-2 control-label '> {{ __('Address') }}</label>
                <input type='text' id='input-address' wire:model.lazy='address' class="form-control  @error('address') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('address') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Disclosure Input -->
            <div class='form-group'>
                <label for='input-disclosure' class='col-sm-2 control-label '> {{ __('Disclosure') }}</label>
                <input type='text' id='input-disclosure' wire:model.lazy='disclosure' class="form-control  @error('disclosure') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('disclosure') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Store_url Input -->
            <div class='form-group'>
                <label for='input-store_url' class='col-sm-2 control-label '> {{ __('Store_url') }}</label>
                <input type='text' id='input-store_url' wire:model.lazy='store_url' class="form-control  @error('store_url') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('store_url') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>


        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Update') }}</button>
            <a href="@route(getRouteName().'.store.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
