<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAlumnoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules()
    {
        return [
            
            'cAluNombre' => 'required|string|max:50',
            'cAluCurso' => 'required|string|max:50',
            'nAluNota1' => 'required|numeric|min:0|max:20',
            'nAluNota2' => 'required|numeric|min:0|max:20',
            'dAluFecRegistro' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'cAluNombre.required' => 'El campo nombre es obligatorio',
            'cAluCurso.required' => 'El campo curso es obligatorio',
            'nAluNota1.required' => 'Es necesario el campo nota 1',
            'nAluNota2.required' => 'Es necesario el campo nota 2',
            'dAluFecRegistro.required' => 'La fecha de registro es obligatorio',
            ];
    }
}
