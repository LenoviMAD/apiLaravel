<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarDietaRequest extends FormRequest
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
            'Comida' => "required|unique:dieta,Comida",
            'Calorias' => "required",
            'Grasas' => "required",
            'Carbohidratos' => "required",
            'Proteinas' => "required"
        ];
    }
}
