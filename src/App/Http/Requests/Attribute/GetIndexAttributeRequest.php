<?php

namespace App\Http\Requests\Magalu\Attribute;

use Illuminate\Foundation\Http\FormRequest;

class GetIndexAttributeRequest extends FormRequest
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
        return [
            'page'      => 'nullable|integer',
            'per_page'  => 'nullable|integer',
        ];
    }
}