<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return ture;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'name'          => 'required|string|max:191|',//unique:roles',
          'image'          => 'image|mimes:png,jpg,jpeg|nullable',
          'status'        => 'integer|boolean', 
        ];
    }
}
