<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends BaseFormRequest
{
    public function store()
    {
        return [

            'name' => 'required|min:3|max:50',
            'logo' => 'required',
            'email' => 'required',
            'link' => 'required'
        ];
    }
    public function update()
    {
        return [
            'name' => 'required|min:3|max:50',
            'email' => 'required',
            'link' => 'required'
        ];
    }
}
