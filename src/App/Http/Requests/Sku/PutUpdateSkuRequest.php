<?php

namespace App\Http\Requests\LaravelMagalu\Sku;

use Illuminate\Foundation\Http\FormRequest;

class PutUpdateSkuRequest extends FormRequest
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
            'IdSku'                 => 'nullable|string',
            'IdSkuErp'              => 'nullable|string',
            'IdProduct'             => 'nullable|string',
            'Name'                  => 'nullable|string',
            'Description'           => 'nullable|string',
            'Height'                => 'nullable|numeric',
            'Width'                 => 'nullable|numeric',
            'Length'                => 'nullable|numeric',
            'Weight'                => 'nullable|numeric',
            'CodeEan'               => 'nullable|string',
            'CodeNcm'               => 'nullable|string',
            'CodeIsbn'              => 'nullable|string',
            'CodeNbm'               => 'nullable|string',
            'Variation'             => 'nullable|string',
            'Status'                => 'nullable|boolean',
            'Price'                 => 'nullable',
            'Price.ListPrice'       => 'nullable|numeric',
            'Price.SalePrice'       => 'nullable|numeric',
            'StockQuantity'         => 'nullable|integer',
            'MainImageUrl'          => 'nullable|string',
            'UrlImages'             => 'nullable|array',
            'Attributes'            => 'nullable',
            'Attributes.*.Name'     => 'nullable|string',
            'Attributes.*.Value'    => 'nullable|string',
        ];
    }
}
