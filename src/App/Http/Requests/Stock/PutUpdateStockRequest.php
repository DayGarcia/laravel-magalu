<?php

namespace App\Http\Requests\LaravelMagalu\Stock;

use Illuminate\Foundation\Http\FormRequest;

class PutUpdateStockRequest extends FormRequest
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
            'IdSku'     => 'required|string',
            'Quantity'  => 'required|integer',
        ];
    }
}
