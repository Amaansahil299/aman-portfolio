<?php

namespace App\Http\Livewire\Admin\Coupon;

use App\Models\Coupon;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $title;
    public $description_1;
    public $description_2;
    public $description_3;
    public $term_1;
    public $term_2;
    public $term_3;
    public $term_4;
    public $term_5;
    public $term_6;
    public $specification_title;
    public $rating;
    public $store_id;
    public $brand_id;
    public $start_datetime;
    public $end_datetime;
    public $thumbnail;
    public $is_verified;
    public $verified_at;
    public $offer_id;
    public $discount_id;
    public $restriction_id;
    public $event_id;
    public $url;
    
    protected $rules = [
        'title' => 'required',
        'description_1' => 'required',
        'description_2' => '',
        'description_3' => '',
        'term_1' => '',
        'term_2' => '',
        'term_3' => '',
        'term_4' => '',
        'term_5' => '',
        'term_6' => '',
        'specification_title' => 'required',
        'rating' => 'required',
        'store_id' => 'required',
        'brand_id' => 'required',
        'start_datetime' => 'required',
        'end_datetime' => 'required',
        'thumbnail' => 'required',
        'is_verified' => 'required',
        'verified_at' => 'required',
        'offer_id' => 'required',
        'discount_id' => 'required',
        'restriction_id' => 'required',
        'event_id' => 'required',
        'url' => 'required',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Coupon') ])]);
        
        if($this->getPropertyValue('thumbnail') and is_object($this->thumbnail)) {
            $this->thumbnail = $this->getPropertyValue('thumbnail')->store('thumbnail');
        }

        Coupon::create([
            'title' => $this->title,            'description_1' => $this->description_1,            'description_2' => $this->description_2,            'description_3' => $this->description_3,            'term_1' => $this->term_1,            'term_2' => $this->term_2,            'term_3' => $this->term_3,            'term_4' => $this->term_4,            'term_5' => $this->term_5,            'term_6' => $this->term_6,            'specification_title' => $this->specification_title,            'rating' => $this->rating,
            'store_id' => $this->store_id,
            'brand_id' => $this->brand_id,
            'start_datetime' => $this->start_datetime,
            'end_datetime' => $this->end_datetime,
            'thumbnail' => $this->thumbnail,
            'is_verified' => $this->is_verified,
            'verified_at' => $this->verified_at,
            'offer_id' => $this->offer_id,
            'discount_id' => $this->discount_id,
            'restriction_id' => $this->restriction_id,
            'event_id' => $this->event_id,
            'url' => $this->url,            
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.coupon.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Coupon') ])]);
    }
}
