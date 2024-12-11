<?php

namespace App\Http\Requests\Twill;

use A17\Twill\Http\Requests\Admin\Request;

class LocationRequest extends Request
{
    public function rulesForCreate()
    {
        return [];
    }

    public function rulesForUpdate()
    {
        return [];
    }

    public function authorize()
    {
        return true; // Allow all users to submit the form, or you can modify this for specific user roles
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',  // Ensure the location has a name
            'description' => 'nullable|string',   // Make description optional
        ];
    }
}
