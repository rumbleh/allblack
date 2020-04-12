<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SegmentoStoreRequest extends FormRequest
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
            "descricao" => "required|string|unique:segmentos|min:3",
        ];
    }

    public function messages()
    {
        return [
            'descricao.required' => 'A descrição do segmento é obrigatória!',
            'descricao.min' => 'Informe a descrição com pelo menos 3 caracteres!',
            'descricao.unique' => 'A descrição informada já existe!',
            'descricao.string' => 'A descrição deve ser informada como texto!'
        ];
    }
}
