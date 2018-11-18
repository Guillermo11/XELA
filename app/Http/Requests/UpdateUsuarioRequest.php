<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUsuarioRequest extends FormRequest
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
          'fercha_hoy'=> 'required',
        'nombres'=> 'required',
        'apellidos'=> 'required',
        'dpi' => ['regex:/^[0-9]{13}+$/'],
        'edad' => 'required|string|size:2',
        'fecha_nacimiento'=> 'required',

        'genero'=> 'required',
        'estado_civil' => 'required',
        'direccion' => 'required',
        'telefono'=>  ['regex:/^[0-9]{8}+$/'],

        'educacion'=> 'required',
        'carrera_titulo'=> 'required',
        'expe_laboral'=> 'string',
        'tiempo_laborado'=> 'string',
        'empresa_laborado'=> 'string',

        'puesto_laboral'=> 'string',
        'laboro_fuera'=> 'string',
        'tiempofuera'  => 'string',
        'nunicipio'=> 'string',
        'ruta_file'=> 'mimes:pdf,docx|max:1024',

        
        ];
    }
}
