<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class NoticiaRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'titulo' => 'required',
            'conteudo' => 'required',
            'status' => [
                'required',
                Rule::in(['A', 'I'])
            ],
            'data_publicacao'=> ['required','date_format:d/m/Y'],
            'imagem' => 'nullable|image'
        ];
    }

    public function messages()

    {
        return [
            'titulo.required' => 'O campo titulo é obrigatorio',
            'conteudo.required'=> 'O campo conteudo é obrigatorio',
            'status.required'=> 'O campo status é obrigatorio',
            'imagem.imgem'=> 'Imagem é obrigatoria',
            'data_publicacao.required'=> 'Data de publicação é obrigatoria',
            'status.in'=> 'O campo status só pode ser Ativo ou Inativo',
        
        ];
    }
}
