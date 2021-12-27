<?php

namespace App\Http\Requests\Magalu\Sku;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreSkuRequest extends FormRequest
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
            'IdSku'                 => 'required|string',
            'IdSkuErp'              => 'required|string',
            'IdProduct'             => 'required|string',
            'Name'                  => 'required|string',
            'Description'           => 'required|string',
            'Height'                => 'required|numeric',
            'Width'                 => 'required|numeric',
            'Length'                => 'required|numeric',
            'Weight'                => 'required|numeric',
            'CodeEan'               => 'required|string',
            'CodeNcm'               => 'nullable|string',
            'CodeIsbn'              => 'nullable|string',
            'CodeNbm'               => 'nullable|string',
            'Variation'             => 'nullable|string',
            'Status'                => 'required|boolean',
            'Price'                 => 'required',
            'Price.ListPrice'       => 'required|numeric',
            'Price.SalePrice'       => 'required|numeric',
            'StockQuantity'         => 'required|integer',
            'MainImageUrl'          => 'nullable|string',
            'UrlImages'             => 'nullable|array',
            'Attributes'            => 'nullable',
            'Attributes.*.Name'     => 'nullable|string',
            'Attributes.*.Value'    => 'nullable|string',
        ];
    }
}
