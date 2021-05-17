<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarDietaRequest extends FormRequest
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
            'Comida' => "required|unique:dieta,Comida,".$this->route('dieta')->id,
            'Calorias' => "required",
            'Grasas' => "required",
            'Carbohidratos' => "required",
            'Proteinas' => "required"
        ];
    }
}
