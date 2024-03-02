<?php

namespace App\CRUD;

use EasyPanel\Contracts\CRUDComponent;
use EasyPanel\Parsers\Fields\Field;
use App\Models\BrandPhoto;
use EasyPanel\Parsers\HTMLInputs\Number;
use EasyPanel\Parsers\HTMLInputs\Text;
use EasyPanel\Parsers\HTMLInputs\Textarea;

class BrandPhotoComponent implements CRUDComponent
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
        return BrandPhoto::class;
    }

    // which kind of data should be showed in list page
    public function fields()
    {
        return ['title', 'description', 'url', 'brand.name'];
    }

    // Searchable fields, if you dont want search feature, remove it
    public function searchable()
    {
        return ['title', 'description', 'url'];
    }

    // Write every fields in your db which you want to have a input
    // Available types : "ckeditor", "checkbox", "text", "select", "file", "textarea"
    // "password", "number", "email", "select", "date", "datetime", "time"
    public function inputs()
    {
        return [
            'title' => Text::label('Title'),
            'description' => Textarea::label('Description'),
            'url' => Text::label("URL "),
            'brand_id' => Number::label("Brand ID "),

        ];
    }

    // Validation in update and create actions
    // It uses Laravel validation system
    public function validationRules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'url' => 'required',
            'brand_id' => 'required',
        ];
    }

    // Where files will store for inputs
    public function storePaths()
    {
        return [];
    }
}
