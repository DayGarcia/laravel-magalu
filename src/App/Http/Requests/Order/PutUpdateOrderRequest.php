<?php

namespace App\Http\Requests\Magalu\Order;

use Illuminate\Foundation\Http\FormRequest;

class PutUpdateOrderRequest extends FormRequest
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
        $validator = array(
            'PROCESSING' => [
                'IdOrder'       => 'required|string',
                'OrderStatus'   => 'required|string',
            ],
            'INVOICED' => [
                'IdOrder'           => 'required|string',
                'OrderStatus'       => 'required|string',
                'InvoicedNumber'    => 'required|numeric',
                'InvoicedLine'      => 'required|numeric',
                'InvoicedIssueDate' => 'required|string',
                'InvoicedKey'       => 'required|string',
                'InvoicedDanfeXml'  => 'required|string',
            ],
            'SHIPPED' => array(
                'IdOrder'                  => 'required|string',
                'OrderStatus'              => 'required|string',
                'ShippedTrackingUrl'       => 'required|string',
                'ShippedTrackingProtocol'  => 'required|string',
                'ShippedEstimatedDelivery' => 'required|string',
                'ShippedCarrierDate'       => 'required|string',
                'ShippedCarrierName'       => 'required|string',
            ),
            'DELIVERED' => [
                'IdOrder'                   => 'required|string',
                'OrderStatus'               => 'required|string',
                'DeliveredDate'             => 'required|string',
            ],
            'SHIPMENTEXCEPTION' => [
                'IdOrder'                           => 'required|string',
                'OrderStatus'                       => 'required|string',
                'ShipmentExceptionObservation'      => 'required|string',
                'ShipmentExceptionOccurrenceDate'   => 'required|string',
            ],
            'CANCELED' => [
                'IdOrder'                           => 'required|string',
                'OrderStatus'                       => 'required|string',
            ],
        );

        return $validator[$this->input('OrderStatus')];
    }
}
