<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'order' => 'required|integer',
            'content' => 'required',
        ];

        return $this->isMethod('POST') ? $rules : array_merge($rules, [
            'slug' => 'required|string|max:255|unique:pages,id,'.$this->route()->parameter('page')->id,
        ]);
    }
}
