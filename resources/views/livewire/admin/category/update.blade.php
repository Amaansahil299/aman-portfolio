<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('UpdateTitle', ['name' => __('Category') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.category.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Category')) }}</a></li>
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
            <!-- Description Input -->
            <div class='form-group'>
                <label for='input-description' class='col-sm-2 control-label '> {{ __('Description') }}</label>
                <input type='text' id='input-description' wire:model.lazy='description' class="form-control  @error('description') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('description') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>


        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Update') }}</button>
            <a href="@route(getRouteName().'.category.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
