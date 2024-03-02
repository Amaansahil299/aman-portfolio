<?php

namespace App\CRUD;

use EasyPanel\Contracts\CRUDComponent;
use EasyPanel\Parsers\Fields\Field;
use App\Models\Coupon;
use EasyPanel\Parsers\HTMLInputs\DateTime;
use EasyPanel\Parsers\HTMLInputs\Number;
use EasyPanel\Parsers\HTMLInputs\Textarea;

class CouponComponent implements CRUDComponent
{
    // Manage actions in crud
    public $create = true;
    public $delete = true;
    public $update = true;

    // If you will set it true it will automatically
    // add `user_id` to create and update action
    public $with_user_id = false;

    public function getModel()
    {
        return Coupon::class;
    }

    // which kind of data should be showed in list page
    public function fields()
    {
        return ['title', 'description_1', 'description_2', 'description_3', 'term_1', 'term_2', 'term_3', 'term_4', 'term_5', 'term_6', 'specification_title', 'rating', 'start_datetime', 'end_datetime', 'thumbnail',
            'is_verified' => Field::title('Is Verified')
                ->asBooleanBadge(trueColor: 'success', falseColor: 'danger')
                ->roundedBadge()
                ->trueValue('Verified :)')
                ->falseValue('Not Verified :('),
            'verified_at', 'url'];
    }

    // Searchable fields, if you dont want search feature, remove it
    public function searchable(): array
    {
        return ['title', 'description_1', 'description_2', 'description_3', 'term_1', 'term_2', 'term_3', 'term_4', 'term_5', 'term_6', 'specification_title', 'rating', 'start_datetime', 'end_datetime', 'thumbnail', 'is_verified', 'verified_at', 'url'];
    }

    // Write every fields in your db which you want to have a input
    // Available types : "ckeditor", "checkbox", "text", "select", "file", "textarea"
    // "password", "number", "email", "select", "date", "datetime", "time"
    public function inputs()
    {
        return [
            'title' => 'text',
            'description_1' => 'text',
            'description_2' => 'text',
            'description_3' => 'text',
            'term_1' => 'text',
            'term_2' => 'text',
            'term_3' => 'text',
            'term_4' => 'text',
            'term_5' => 'text',
            'term_6' => 'text',
            'specification_title' => 'text',
            'rating' => Number::label("Rating"),
            'store_id' => Number::label("Store ID"),
            'brand_id' => Number::label("Brand ID"),
            'start_datetime' => Datetime::label("Start DateTime"),
            'end_datetime' => Datetime::label("End Datetime"),
            'thumbnail' => 'file',
            'is_verified' => ['select' => [
                '1' => 'Verified:)',
                '0' => 'Not Verified :('
                ],
            ],
            'verified_at' => Datetime::label("Verified At"),
            'offer_id' => Number::label("Offer ID"),
            'discount_id' => Number::label("Discount ID"),
            'restriction_id' => Number::label("Restriction ID"),
            'event_id' => Number::label("Event ID"),
            'url' => 'text',

        ];
    }

    // Validation in update and create actions
    // It uses Laravel validation system
    public function validationRules()
    {
        return [
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
            'store_id'  => 'required',
            'brand_id' => 'required',
            'start_datetime' => 'required',
            'end_datetime'  => 'required',
            'thumbnail'  => 'required',
            'is_verified' => 'required',
            'verified_at'  => 'required',
            'offer_id' => 'required',
            'discount_id'  => 'required',
            'restriction_id'  => 'required',
            'event_id'  => 'required',
            'url' => 'required',
        ];
    }

    // Where files will store for inputs
    public function storePaths()
    {
        return [];
    }
}
