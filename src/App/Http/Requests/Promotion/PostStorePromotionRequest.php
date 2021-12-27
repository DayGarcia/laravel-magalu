<?php

namespace App\Http\Requests\Magalu\Promotion;

use Illuminate\Foundation\Http\FormRequest;

class PostStorePromotionRequest extends FormRequest
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
            "IdSku"         => "required|string",
            "ListPrice"     => "required|numeric",
            "SalePrice"     => "required|string",
            "StartDate"     => "required|string",
            "EndDate"       => "required|string",
        ];
    }
}
