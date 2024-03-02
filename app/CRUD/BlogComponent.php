<?php

namespace App\CRUD;

use EasyPanel\Contracts\CRUDComponent;
use EasyPanel\Parsers\Fields\Field;
use App\Models\Blog;
use EasyPanel\Parsers\HTMLInputs\Number;
use EasyPanel\Parsers\HTMLInputs\Textarea;

class BlogComponent implements CRUDComponent
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
        return Blog::class;
    }

    // which kind of data should be showed in list page
    public function fields()
    {
        return [
            'short_description',
            'title',
            'thumbnail' => Field::title("Thumbnail")
                ->asImage()
                ->roundedImage()
                ->alt('Thumbnail'),
            'user.name' => Field::title('Creator')
                ->asBadge()
        ];
    }

    // Searchable fields, if you dont want search feature, remove it
    public function searchable()
    {
        return [ 'content', 'title', 'thumbnail'];
    }

    // Write every fields in your db which you want to have a input
    // Available types : "ckeditor", "checkbox", "text", "select", "file", "textarea"
    // "password", "number", "email", "select", "date", "datetime", "time"
    public function inputs()
    {
        return [
            'title' => 'text',
            'short_description' => 'text',
            'thumbnail' => 'file',
            'content' => Textarea::label('Html Content'),
        ];
    }

    // Validation in update and create actions
    // It uses Laravel validation system
    public function validationRules()
    {
        return [
            'content' => 'required',
            'title' => 'required',
            'short_description' => 'required',
            'thumbnail' => 'required',
        ];
    }

    // Where files will store for inputs
    public function storePaths()
    {
        return [
            '/blogs/images'
        ];
    }
}
