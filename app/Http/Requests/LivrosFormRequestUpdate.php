<?php

namespace App\Http\Requests;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;


class LivrosFormRequestUpdate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titulo'=> 'required|max:100|min:1',
            'autor'=>'required|max:50|min:1',
            'data_de_lancamento'=>'required|date',
            'editora'=>'required|max:50|min:1',
            'sinopse'=>'required|max:1000|min:1',
            'genero'=>'required|max:50|min:1',
            'avaliacao'=>'max:1000|min:1'
        ];

    }
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'=>false,
            'error'=>$validator->errors()
        ]));
    }
    public function messages()
    {
        return [
            'titulo.required'=>'o titulo é obrigatório',
            'titulo.max'=>'o campo deve ter no maximo 100',
            'titulo.min'=> 'o campo deve conter no minimo 1',
            'autor.required'=>'otitulo é obrigatório',
            'autor.max'=>'o campo deve ter no maximo 50',
            'autor.min'=> 'o campo deve conter no minimo 1',
            'data_de_lancamento.required'=>'o campo data de lancamento é obrigatório',
            'data_de_lancamento.date'=>'formato invalido',
            'editora.required'=>'o campo é obrigatório',
            'editora.max'=>'o campo deve ter no maximo 50',
            'editora.min'=> 'o campo deve conter no minimo 1',
            'sinopse.required'=>'o campo é obrigatório',
            'sinopse.max'=>'o campo deve ter no maximo 1000',
            'sinopse.min'=> 'o campo deve conter no minimo 1',
            'genero.required'=>'o genero é obrigatório',
            'genero.max'=>'o campo deve ter no maximo 50',
            'genero.min'=> 'o campo deve conter no minimo 1',
            'avaliacao.max'=>'o campo deve ter no maximo 1000',
            'avaliacao.min'=> 'o campo deve conter no minimo 1'
      

        ];
    }
}
