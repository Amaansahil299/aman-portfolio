<?php

namespace App\CRUD;

use EasyPanel\Contracts\CRUDComponent;
use EasyPanel\Parsers\Fields\Field;
use App\Models\User;
use EasyPanel\Parsers\HTMLInputs\DateTime;

class UserComponent implements CRUDComponent
{
    // Manage actions in crud
    public $create = true;
    public $delete = true;
    public $update = true;

    // If you will set it true it will automatically
    // add `user_id` to create and update action


    public function getModel()
    {
        return User::class;
    }

    // which kind of data should be showed in list page
    public function fields()
    {
        return [
            'id',
            'name',
            'email',
            'email_verified_at',

        ];
    }

    // Searchable fields, if you dont want search feature, remove it
    public function searchable()
    {
        return ['name', 'email'];
    }

    // Write every fields in your db which you want to have a input
    // Available types : "ckeditor", "checkbox", "text", "select", "file", "textarea"
    // "password", "number", "email", "select", "date", "datetime", "time"
    public function inputs()
    {
        return [
            'name' => 'text',
            'email' => 'email',
            'email_verified_at' => Datetime::label("Email Verified At"),
        ];
    }

    // Validation in update and create actions
    // It uses Laravel validation system
    public function validationRules()
    {
        return [
            'email' => 'required|email',
            'name' => 'required',
            'email_verified_at' => 'required|date',
        ];
    }

    // Where files will store for inputs
    public function storePaths()
    {
        return [];
    }
}
