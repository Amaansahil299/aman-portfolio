<?php

namespace App\CRUD;

use EasyPanel\Contracts\CRUDComponent;
use EasyPanel\Parsers\Fields\Field;
use App\Models\UserBrand;
use EasyPanel\Parsers\HTMLInputs\Number;

class UserBrandComponent implements CRUDComponent
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
        return UserBrand::class;
    }

    // which kind of data should be showed in list page
    public function fields()
    {
        return ['id', 'brand.name', 'user.name', 'brand_id', 'user_id'];
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
            'brand_id' => Number::label("Brand ID"),
            'user_id' => Number::label("User ID"),

        ];
    }

    // Validation in update and create actions
    // It uses Laravel validation system
    public function validationRules()
    {
        return [
            'brand_id' => "required",
            'user_id' => "required",
        ];
    }

    // Where files will store for inputs
    public function storePaths()
    {
        return [];
    }
}
