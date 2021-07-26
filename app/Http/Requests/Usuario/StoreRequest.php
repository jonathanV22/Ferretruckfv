<?php

namespace App\Http\Requests\Usuario;

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
            'apellido'=>'required|string|max:50',
            'rut'=>'required|string|min:7|max:12|unique:usuarios',
            'foto'=>'required|mimes:jpeg,png,jpg,JPEG,PNG,JPG',
            'direccion'=>'required|string|max:50',
            'telefono'=>'required|integer',
            'estado'=>'required',
            'email'=>'required|email|unique:usuarios',
            'password'=>'required|string|max:255'  
        ];
    }
    public function mensajes(){
        return[
            'nombre.required'=>'El campo nombre es requeridos',
            'nombre.string'=>'El valor del campo nombre es incorrecto.',
            'nombre.max'=>'El campo nombre solo permite 50 caracteres',

            'apellido.required'=>'El campo apellido es requerido',
            'apellido.string'=>'El valor del campo apellido es incorrecto.',
            'apellido.max'=>'El campo apellido solo permite 50 caracteres',

            'rut.required'=>'El campo rut es requerido',
            'rut.string'=>'El valor del campo rut es incorrecto.',
            'rut.min'=>'El campo rut solo permite un minimode 7 caracteres',
            'rut.max'=>'El campo rut solo permite 12 caracteres',
            'rut.unique'=>'Este rut ya se encuentra registrado',

            'foto.required'=>'El campo foto es requerido',
            'foto.mimes'=>'Solo se permiten estos formatos de imagen: jpeg,bmp,png,jpg,JPG,PNG,JPEG',

            'direccion.required'=>'El campo direccion es requerido',
            'direccion.string'=>'El valor del campo direccion es incorrecto.',
            'direccion.max'=>'El campo direccion solo permite 50 caracteres',

            'telefono.required'=>'El campo telefono es requerido',
            'telefono.integer'=>'El valor del campo telefono es incorrecto.',

            'estado.required'=>'El campo estado es requerido',

            'email.required'=>'El  correo es requerido',
            'email.emil'=>'El campo correo es incorrecto.',
            'email.unique'=>'Este correo ya se encuentra registrado',
        ];
    }
}
