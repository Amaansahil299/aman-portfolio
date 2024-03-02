<?php

namespace App\CRUD;

use EasyPanel\Contracts\CRUDComponent;
use EasyPanel\Parsers\Fields\Field;
use App\Models\CouponApproval;
use EasyPanel\Parsers\HTMLInputs\Number;

class CouponApprovalComponent implements CRUDComponent
{
    // Manage actions in crud
    public $create = true;
    public $delete = true;
    public $update = true;

    // If you will set it true it will automatically
    // add `user_id` to create and update action
    public $with_user_id = true;

    public function getModel()
    {
        return CouponApproval::class;
    }

    // which kind of data should be showed in list page
    public function fields()
    {
        return ["coupon_id", "country_id" , "coupon.title", "country.name"];
    }

    // Searchable fields, if you dont want search feature, remove it
    public function searchable()
    {
        return [];
    }

    // Write every fields in your db which you want to have a input
    // Available types : "ckeditor", "checkbox", "text", "select", "file", "textarea"
    // "password", "number", "email", "select", "date", "datetime", "time"
    public function inputs()
    {
        return [
            'coupon_id' => Number::label("Coupon ID"),
            'country_id' => Number::label("Country ID"),
        ];
    }

    // Validation in update and create actions
    // It uses Laravel validation system
    public function validationRules()
    {
        return [
            'coupon_id' => "required",
            'country_id' => "required",
        ];
    }

    // Where files will store for inputs
    public function storePaths()
    {
        return [];
    }
}
