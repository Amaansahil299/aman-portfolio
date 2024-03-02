<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('CreateTitle', ['name' => __('Contact') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.contact.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Contact')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Create') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="create" enctype="multipart/form-data">

        <div class="card-body">
                        <!-- Name Input -->
            <div class='form-group'>
                <label for='input-name' class='col-sm-2 control-label '> {{ __('Name') }}</label>
                <input type='text' id='input-name' wire:model.lazy='name' class="form-control  @error('name') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('name') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Email Input -->
            <div class='form-group'>
                <label for='input-email' class='col-sm-2 control-label '> {{ __('Email') }}</label>
                <input type='email' id='input-email' wire:model.lazy='email' class="form-control  @error('email') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('email') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Phone Number  Input -->
            <div class='form-group'>
                <label for='input-phone' class='col-sm-2 control-label '> {{ __('Phone Number ') }}</label>
                <input type='text' id='input-phone' wire:model.lazy='phone' class="form-control  @error('phone') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('phone') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Message Input -->
            <div class='form-group'>
                <label for='input-message' class='col-sm-2 control-label '> {{ __('Message') }}</label>
                <textarea id="input-message" wire:model.lazy='message' class="form-control  @error('message') is-invalid @enderror" placeholder='' autocomplete='on'></textarea>
                @error('message') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Is_read Input -->
            <div class='form-group'>
                <label for='input-is_read' class='col-sm-2 control-label '> {{ __('Is_read') }}</label>
                <select id='input-is_read' wire:model.lazy='is_read' class="form-control  @error('is_read') is-invalid @enderror">
                    @foreach(getCrudConfig('Contact')->inputs()['is_read']['select'] as $key => $value)
                        <option value='{{ $key }}'>{{ $value }}</option>
                    @endforeach
                </select>
                @error('is_read') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Create') }}</button>
            <a href="@route(getRouteName().'.contact.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
