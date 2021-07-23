<?php

namespace App\Http\Requests\Categoria;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'nombre'=>'required|string|max:50',
             'descripcion'=>'nullable|string|max:150'
        ];
    }
    public function mensajes(){
        return[
            'nombre.required'=>'El campo nombre es requerido',
            'nombre.string'=>'El valor del campo nombre es incorrecto',
            'nombre.max'=>'El campo nombre solo permite 50 caracteres',
            'descripcion.nullable'=>'El campo descripción es requerido',
            'descripcion.string'=>'El valor del campo descripción es incorrecto',
            'descripcion.max'=>'El campo descripción solo permite 50 caracteres'
        ];
    }
}
