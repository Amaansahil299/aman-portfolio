<?php

namespace App\CRUD;

use EasyPanel\Contracts\CRUDComponent;
use EasyPanel\Parsers\Fields\Field;
use App\Models\CouponFeedback;
use EasyPanel\Parsers\HTMLInputs\Number;
use EasyPanel\Parsers\HTMLInputs\Textarea;

class CouponFeedbackComponent implements CRUDComponent
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
        return CouponFeedback::class;
    }

    // which kind of data should be showed in list page
    public function fields()
    {
        return [
            "id",
            "coupon_id",
            "user_id",
            'is_working' => Field::title('Is Working')
                ->asBooleanBadge(trueColor: 'success', falseColor: 'danger')
                ->roundedBadge()
                ->trueValue('Working :)')
                ->falseValue('Not Working :('),

        ];
    }

    // Searchable fields, if you dont want search feature, remove it
    public function searchable()
    {
        return ['is_working'];
    }

    // Write every fields in your db which you want to have a input
    // Available types : "ckeditor", "checkbox", "text", "select", "file", "textarea"
    // "password", "number", "email", "select", "date", "datetime", "time"
    public function inputs()
    {
        return [
            'coupon_id' => Number::label("Coupon ID"),
            'user_id' => Number::label("User ID"),
            'is_working' => ['select' => [
                '1' => 'Working:)',
                '0' => 'Not Working :('
                ],
            ],
        ];
    }

    // Validation in update and create actions
    // It uses Laravel validation system
    public function validationRules()
    {
        return [
            'coupon_id' => "required",
            'user_id' => "required",
            'is_working' => "required",
        ];
    }

    // Where files will store for inputs
    public function storePaths()
    {
        return [];
    }
}
