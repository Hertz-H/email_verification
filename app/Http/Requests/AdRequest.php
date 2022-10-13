<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdRequest extends BaseFormRequest
{
    public function store()
    {
        return [

            'name' => 'required|min:3|max:50',
            'image' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'link' => 'required'
        ];
    }
    public function update()
    {
        return [
            'name' => 'required|min:3|max:50',
            'start_date' => 'required',
            'end_date' => 'required',
            'link' => 'required'
        ];
    }
}
