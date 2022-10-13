<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends BaseFormRequest
{
    public function store()
    {
        return [
            'title' => 'required|min:3|max:50',
            'requirements' => 'required',
            'from' => 'required',
            'to' => 'required'
        ];
    }
    public function update()
    {
        return [
            'title' => 'required|min:3|max:50',
            'requirements' => 'required',
            'from' => 'required',
            'to' => 'required'
        ];
    }
}
