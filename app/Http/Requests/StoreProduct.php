<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduct extends FormRequest
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
            'name' => 'required|min:3',
            'price' => 'required|numeric|integer|min:3'
        ];
    }

    public function attributes()
    {
        return[
            'name' => 'Nombre',
            'price' => 'Precio'
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'El Nombre Del Producto Es Obligatorio',
            'name.min' => 'El Nombre Debe Contener Minimo 3 Caracteres',

            'price.required' => 'El Precio Del Producto Es Obligatorio',
            'price.numeric'=> 'El precio Debe Contener Solo Caracteres Numericos',
            'price.min' => 'El Precio Debe Contener Minimo Un Valor De 3 Cifras',
        ];
    }
}
