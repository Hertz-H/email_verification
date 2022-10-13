<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LocationRequest extends BaseFormRequest
{
    public function store()
    {
        return [
            'name' => 'required|min:3|max:50',

        ];
    }
    public function update()
    {
        return [
            'name' => 'required|min:3|max:50',

        ];
    }
}
