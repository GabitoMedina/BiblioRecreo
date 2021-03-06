<?php

namespace cgvVentas\Http\Requests;

use cgvVentas\Http\Requests\Request;

class ProformaFormRequest extends Request
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
            'idcliente'=>'required',
            'tipo_comprobante'=>'required|max:20',
            'num_comprobante'=>'required|max:10',
            'idarticulo'=>'required',
            'cantidad'=>'required',
            'precio_venta'=>'required',
            'descuento'=>'required',
            'total_proforma'=>'required'
        ];
    }
}
