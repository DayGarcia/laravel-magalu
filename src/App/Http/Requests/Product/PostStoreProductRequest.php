<?php

namespace App\Http\Requests\Magalu\Product;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'IdProduct'             => 'required|string',
            'Name'                  => 'required|string',
            'Code'                  => 'required|string',
            'Brand'                 => 'required|string',
            'NbmOrigin'             => 'required|string',
            'NbmNumber'             => 'nullable|string',
            'WarrantyTime'          => 'required|string',
            'Active'                => 'required|boolean',
            'Categories'            => 'required',
            'Categories.*.Id'       => 'required|string',
            'Categories.*.Name'     => 'required|string',
            'Categories.*.ParentId' => 'nullable|string',
            'Attributes'            => 'required',
            'Attributes.*.Name'     => 'required|string',
            'Attributes.*.Value'    => 'required|string',
        ];
    }
}
