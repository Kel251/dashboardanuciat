<?php

namespace Anunciate\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValForms extends FormRequest
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
            'Anuncio' => 'required',
            'Descripcion' => 'required',
            'telefono' => 'required',
            'email' => 'required|email',
            'precio' => 'required',
            'Id_est' => 'required',
            'Id_cat' => 'required'
        ];
    }
}
