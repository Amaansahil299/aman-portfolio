<?php

namespace App\CRUD;

use EasyPanel\Contracts\CRUDComponent;
use EasyPanel\Parsers\Fields\Field;
use App\Models\Subscriber;
use EasyPanel\Parsers\HTMLInputs\Number;

class SubscriberComponent implements CRUDComponent
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
        return Subscriber::class;
    }

    // which kind of data should be showed in list page
    public function fields()
    {
        return ['id', 'email',
            'is_subscribed' => Field::title('Is Subscribed')
                ->asBooleanBadge(trueColor: 'success', falseColor: 'danger')
                ->roundedBadge()
                ->trueValue('Subscribed :)')
                ->falseValue('Not Subscribed :(')
        ];
    }

    // Searchable fields, if you dont want search feature, remove it
    public function searchable()
    {
        return ['email', 'is_subscribed'];
    }

    // Write every fields in your db which you want to have a input
    // Available types : "ckeditor", "checkbox", "text", "select", "file", "textarea"
    // "password", "number", "email", "select", "date", "datetime", "time"
    public function inputs()
    {
        return [
            'email' => 'text',
            'is_subscribed' => ['select' => [
                '1' => 'Subscribed :)',
                '0' => 'Not Subscribed:('
            ],
            ],
        ];
    }

    // Validation in update and create actions
    // It uses Laravel validation system
    public function validationRules()
    {
        return [
            'email' => "required|email",
            'is_subscribed' => "required",
        ];
    }

    // Where files will store for inputs
    public function storePaths()
    {
        return [];
    }
}
