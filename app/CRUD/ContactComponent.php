<?php

namespace App\CRUD;

use EasyPanel\Contracts\CRUDComponent;
use EasyPanel\Parsers\Fields\Field;
use App\Models\Contact;
use EasyPanel\Parsers\HTMLInputs\Email;
use EasyPanel\Parsers\HTMLInputs\Number;
use EasyPanel\Parsers\HTMLInputs\Text;
use EasyPanel\Parsers\HTMLInputs\Textarea;

class ContactComponent implements CRUDComponent
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
        return Contact::class;
    }

    // which kind of data should be showed in list page
    public function fields()
    {
        return ['name', 'email', 'phone', 'message',
            'is_read' => Field::title('Is Read?')
                ->asBooleanBadge(trueColor: 'success', falseColor: 'danger')
                ->roundedBadge()
                ->trueValue('Read :)')
                ->falseValue('Unread :(')
        ];
    }

    // Searchable fields, if you dont want search feature, remove it
    public function searchable()
    {
        return ['name', 'email', 'phone', 'message', 'is_read'];
    }

    // Write every fields in your db which you want to have a input
    // Available types : "ckeditor", "checkbox", "text", "select", "file", "textarea"
    // "password", "number", "email", "select", "date", "datetime", "time"
    public function inputs()
    {
        return [
            'name' => Text::label('Name'),
            'email' => Email::label('Email'),
            'phone' => Text::label("Phone Number "),
            'message' => Textarea::label("Message"),
            'is_read' => ['select' => [
                '1' => 'Read:)',
                '0' => 'Unread :('
                ],
            ],
        ];
    }

    // Validation in update and create actions
    // It uses Laravel validation system
    public function validationRules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
            'status' => 'required',

        ];
    }


    // Where files will store for inputs
    public function storePaths()
    {
        return [];
    }
}
