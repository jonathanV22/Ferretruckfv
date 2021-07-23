<?php

namespace App\Http\Requests\Producto;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
           'nombre'=>'required|string|max:50',
           'descripcion'=>'required|string|max:50',
           'marca'=>'required|string|max:50',
           'imagen'=>'required|dimensions:min_width=100,min_height=200|mimes:jpeg,bmp,jpg,JPG,png,PNG,JPEG',
           'precio'=>'required|integer',
           'stock'=>'required|integer',
           'user_id'=>'required|integer|exists:App\User,id',
           'categoria_id'=>'required|integer|exists:App\Categoria,id|'
        ];
    }
    public function mensajes(){
        return[
            'nombre.required'=>'El campo nombre es requerido',
            'nombre.string'=>'El valor del campo nombre es incorrecto.',
            'nombre.max'=>'El campo nombre solo permite 50 caracteres',

            'descripcion.required'=>'El campo descripción es requerido',
            'descripcion.string'=>'El valor del campo descripción es incorrecto.',
            'descripcion.max'=>'El campo descripción solo permite 50 caracteres',

            'marca.required'=>'El campo marca es requerido',
            'marca.string'=>'El valor del campo marca es incorrecto.',
            'marca.max'=>'El campo marca solo permite 50 caracteres',

            'imagen.required'=>'El campo imagen es requerido',
            'imagen.dimensions'=>'Solo se permiten fotos de 100x200 px',
            'imagen.mimes'=>'Solo se permiten estos formatos de imagen: jpeg,bmp,png,jpg,JPG,PNG,JPEG',
            
            'precio.required'=>'El campo precio es requerido',
            'precio.integer'=>'El valor del campo precio es incorrecto.',

            'stock.required'=>'El campo stock es requerido',
            'stock.integer'=>'El valor del campo stock es incorrecto.',
            
            'user_id.required'=>'El campo usuario es requerido.',
            'user_id.integer'=>'El valor del campo usuario es incorrecto.',
            'user_id.exists'=>'EL usuario no existe.',
            
            'categoria_id.required'=>'El campo categoria es requerido',
            'categoria_id.integer'=>'El valor del campo categoria es incorrecto.',
            'categoria_id.exists'=>'La categoria no existe.'            

        ];
    }
}
