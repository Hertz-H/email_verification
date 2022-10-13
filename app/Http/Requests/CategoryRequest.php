<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends  BaseFormRequest
{
    public function store()
    {
        return [

            'title' => 'required|min:3|max:50',
        ];
    }
    public function update()
    {
        return [
            'title' => 'required|min:3|max:50',
        ];
    }
}
