<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('UpdateTitle', ['name' => __('Coupon') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.coupon.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Coupon')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Update') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="update" enctype="multipart/form-data">

        <div class="card-body">

                        <!-- Title Input -->
            <div class='form-group'>
                <label for='input-title' class='col-sm-2 control-label '> {{ __('Title') }}</label>
                <input type='text' id='input-title' wire:model.lazy='title' class="form-control  @error('title') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('title') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Description_1 Input -->
            <div class='form-group'>
                <label for='input-description_1' class='col-sm-2 control-label '> {{ __('Description_1') }}</label>
                <input type='text' id='input-description_1' wire:model.lazy='description_1' class="form-control  @error('description_1') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('description_1') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Description_2 Input -->
            <div class='form-group'>
                <label for='input-description_2' class='col-sm-2 control-label '> {{ __('Description_2') }}</label>
                <input type='text' id='input-description_2' wire:model.lazy='description_2' class="form-control  @error('description_2') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('description_2') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Description_3 Input -->
            <div class='form-group'>
                <label for='input-description_3' class='col-sm-2 control-label '> {{ __('Description_3') }}</label>
                <input type='text' id='input-description_3' wire:model.lazy='description_3' class="form-control  @error('description_3') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('description_3') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Term_1 Input -->
            <div class='form-group'>
                <label for='input-term_1' class='col-sm-2 control-label '> {{ __('Term_1') }}</label>
                <input type='text' id='input-term_1' wire:model.lazy='term_1' class="form-control  @error('term_1') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('term_1') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Term_2 Input -->
            <div class='form-group'>
                <label for='input-term_2' class='col-sm-2 control-label '> {{ __('Term_2') }}</label>
                <input type='text' id='input-term_2' wire:model.lazy='term_2' class="form-control  @error('term_2') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('term_2') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Term_3 Input -->
            <div class='form-group'>
                <label for='input-term_3' class='col-sm-2 control-label '> {{ __('Term_3') }}</label>
                <input type='text' id='input-term_3' wire:model.lazy='term_3' class="form-control  @error('term_3') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('term_3') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Term_4 Input -->
            <div class='form-group'>
                <label for='input-term_4' class='col-sm-2 control-label '> {{ __('Term_4') }}</label>
                <input type='text' id='input-term_4' wire:model.lazy='term_4' class="form-control  @error('term_4') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('term_4') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Term_5 Input -->
            <div class='form-group'>
                <label for='input-term_5' class='col-sm-2 control-label '> {{ __('Term_5') }}</label>
                <input type='text' id='input-term_5' wire:model.lazy='term_5' class="form-control  @error('term_5') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('term_5') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Term_6 Input -->
            <div class='form-group'>
                <label for='input-term_6' class='col-sm-2 control-label '> {{ __('Term_6') }}</label>
                <input type='text' id='input-term_6' wire:model.lazy='term_6' class="form-control  @error('term_6') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('term_6') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Specification_title Input -->
            <div class='form-group'>
                <label for='input-specification_title' class='col-sm-2 control-label '> {{ __('Specification_title') }}</label>
                <input type='text' id='input-specification_title' wire:model.lazy='specification_title' class="form-control  @error('specification_title') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('specification_title') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Rating Input -->
            <div class='form-group'>
                <label for='input-rating' class='col-sm-2 control-label '> {{ __('Rating') }}</label>
                <input type='number' id='input-rating' wire:model.lazy='rating' class="form-control  @error('rating') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('rating') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Store ID Input -->
            <div class='form-group'>
                <label for='input-store_id' class='col-sm-2 control-label '> {{ __('Store ID') }}</label>
                <input type='number' id='input-store_id' wire:model.lazy='store_id' class="form-control  @error('store_id') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('store_id') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Brand ID Input -->
            <div class='form-group'>
                <label for='input-brand_id' class='col-sm-2 control-label '> {{ __('Brand ID') }}</label>
                <input type='number' id='input-brand_id' wire:model.lazy='brand_id' class="form-control  @error('brand_id') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('brand_id') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Start DateTime Input -->
            <div class='form-group'>
                <label for='input-start_datetime' class='col-sm-2 control-label '> {{ __('Start DateTime') }}</label>
                <input type='datetime-local' id='input-start_datetime' wire:model.lazy='start_datetime' class="form-control  @error('start_datetime') is-invalid @enderror" autocomplete='on'>
                @error('start_datetime') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- End Datetime Input -->
            <div class='form-group'>
                <label for='input-end_datetime' class='col-sm-2 control-label '> {{ __('End Datetime') }}</label>
                <input type='datetime-local' id='input-end_datetime' wire:model.lazy='end_datetime' class="form-control  @error('end_datetime') is-invalid @enderror" autocomplete='on'>
                @error('end_datetime') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Thumbnail Input -->
            <div class='form-group'>
                <label for='input-thumbnail' class='col-sm-2 control-label '> {{ __('Thumbnail') }}</label>
                <input type='file' id='input-thumbnail' wire:model='thumbnail' class="form-control  @error('thumbnail') is-invalid @enderror">
                @if($thumbnail and !$errors->has('thumbnail') and $thumbnail instanceof Illuminate\Http\UploadedFile and $thumbnail->isPreviewable())
                    <a href="{{ $thumbnail->temporaryUrl() }}" target="_blank"><img width="200" height="200" class="mt-3 img-fluid shadow" src="{{ $thumbnail->temporaryUrl() }}" alt=""></a>
                @endif
                @error('thumbnail') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Is_verified Input -->
            <div class='form-group'>
                <label for='input-is_verified' class='col-sm-2 control-label '> {{ __('Is_verified') }}</label>
                <select id='input-is_verified' wire:model.lazy='is_verified' class="form-control  @error('is_verified') is-invalid @enderror">
                    @foreach(getCrudConfig('Coupon')->inputs()['is_verified']['select'] as $key => $value)
                        <option value='{{ $key }}'>{{ $value }}</option>
                    @endforeach
                </select>
                @error('is_verified') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Verified At Input -->
            <div class='form-group'>
                <label for='input-verified_at' class='col-sm-2 control-label '> {{ __('Verified At') }}</label>
                <input type='datetime-local' id='input-verified_at' wire:model.lazy='verified_at' class="form-control  @error('verified_at') is-invalid @enderror" autocomplete='on'>
                @error('verified_at') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Offer ID Input -->
            <div class='form-group'>
                <label for='input-offer_id' class='col-sm-2 control-label '> {{ __('Offer ID') }}</label>
                <input type='number' id='input-offer_id' wire:model.lazy='offer_id' class="form-control  @error('offer_id') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('offer_id') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Discount ID Input -->
            <div class='form-group'>
                <label for='input-discount_id' class='col-sm-2 control-label '> {{ __('Discount ID') }}</label>
                <input type='number' id='input-discount_id' wire:model.lazy='discount_id' class="form-control  @error('discount_id') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('discount_id') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Restriction ID Input -->
            <div class='form-group'>
                <label for='input-restriction_id' class='col-sm-2 control-label '> {{ __('Restriction ID') }}</label>
                <input type='number' id='input-restriction_id' wire:model.lazy='restriction_id' class="form-control  @error('restriction_id') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('restriction_id') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Event ID Input -->
            <div class='form-group'>
                <label for='input-event_id' class='col-sm-2 control-label '> {{ __('Event ID') }}</label>
                <input type='number' id='input-event_id' wire:model.lazy='event_id' class="form-control  @error('event_id') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('event_id') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Url Input -->
            <div class='form-group'>
                <label for='input-url' class='col-sm-2 control-label '> {{ __('Url') }}</label>
                <input type='text' id='input-url' wire:model.lazy='url' class="form-control  @error('url') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('url') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>


        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Update') }}</button>
            <a href="@route(getRouteName().'.coupon.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
