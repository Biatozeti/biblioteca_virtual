<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivrosFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titulo' => 'required|max:100|min:1',
            'autor'=>'required|max:50|min:1',
            'data_lancamento'=>'required|date',
            'editora'=> 'required|max:50|min:1',
            'sinopse'=> 'required|max:1000|min:200',
            'genero'=> 'required|max:50|min:1',
            'avaliacao'=> 'required|max:1000|min:1'
        ];
    }

    public function messages ()
    {
        return[
            'titulo.required'=> 'o campo é obrigatório',
            'titulo.max'=> 'o campo deve conter no maximo 100 caracteres',
            'titulo.min'=> 'o campo deve conter no minimo 1 caracteres',
            'autor.required'=> 'o campo é obrigatório',
            'autor.max'=> 'o campo deve conter no maximo 50 caracteres',
            'autor.min'=> 'o campo deve conter no minimo 1 caracteres',
            'data_lancamento.required'=> 'o campo é obrigatorio',
            'editora.required'=>'o campo é obrigatório',
            'editora.max'=> 'o campo deve conter no maximo 50 caracteres',
            'editora.min'=> 'o campo deve conter no minimo 1 caracteres',
            'sinopse.required'=> 'o campo é obrigatório',
            'sinopse.max'=> 'o campo deve conter no maximo 1000 caracteres',
            'sinopse.min'=> 'o campo deve conter no minimo 200 caracteres',
            'genero.required'=> 'o campo é obrigatório',
            'genero.max'=> 'o campo deve conter no maximo 50 caracteres',
            'genero.min'=> 'o campo deve conter no minimo 1 caracteres',
            'avaliacao.required'=> 'o campo é obrigatório',
            'avaliacao.max'=> 'o campo deve conter no maximo 1000 caracteres',
            'avaliacao.min'=> 'o campo deve conter no minimo 1 caracteres',


            
        ];
    }
}
