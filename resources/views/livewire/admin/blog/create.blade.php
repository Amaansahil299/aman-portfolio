<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('CreateTitle', ['name' => __('Blog') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.blog.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Blog')) }}</a></li>
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

            <!-- Short_description Input -->
            <div class='form-group'>
                <label for='input-short_description' class='col-sm-2 control-label '> {{ __('Short_description') }}</label>
                <input type='text' id='input-short_description' wire:model.lazy='short_description' class="form-control  @error('short_description') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('short_description') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>

            
            <!-- Thumbnail Input -->
            <div class='form-group '>
                <label for='input-thumbnail' class='col-sm-2 control-label '> {{ __('Thumbnail') }}</label>

                <input type='file' id='input-thumbnail' wire:model='thumbnail' class="form-control  @error('thumbnail') is-invalid @enderror">
                @if($thumbnail and !$errors->has('thumbnail') and $thumbnail instanceof Illuminate\Http\UploadedFile and $thumbnail->isPreviewable())
                    <a href="{{ $thumbnail->temporaryUrl() }}" target="_blank"><img width="200" height="200" class="mt-3 img-fluid shadow" src="{{ $thumbnail->temporaryUrl() }}" alt=""></a>
                @endif
                @error('thumbnail') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Html Content Input -->
            <div class='form-group' wire:ignore  >
                <label for='input-content' class='col-sm-2 control-label '> {{ __('Html Content') }}</label>
                <textarea id="input-content"
                          wire:model='content'
                          class="form-control  @error('content') is-invalid @enderror"
                          placeholder='' autocomplete='on'

                          x-data="{ content: @entangle('content').defer }"
                          x-init="
                    new FroalaEditor($el, {
                           imageUploadURL: '{{ url("/upload-image") }}',
                            imageUploadParams: {
                                _token: '{{ csrf_token() }}'
                            },
                            events: {
                            'contentChanged': function () {
                                content = this.html.get();
                            },
                        }
                    });"
                ></textarea>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-success  ml-4">{{ __('Create') }}</button>
            <a href="@route(getRouteName().'.blog.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
