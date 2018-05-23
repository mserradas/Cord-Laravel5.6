<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCocheRequest extends FormRequest
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
            'marca_coche' => 'required',
            'modelo' => 'required|max:25',
            'color' => 'required|max:25',
            'kilometraje' => 'required|max:25',
            'combustible' => 'required',
            'tipo_cambio' => 'required',
            'precio' => 'required',
        ];
    }
}
