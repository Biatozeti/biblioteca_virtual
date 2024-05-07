<?php

namespace App\Http\Controllers;

use App\Http\Requests\LivrosFormRequest;
use App\Models\livros;
use Illuminate\Http\Request;

class LivrosController extends Controller
{
    public function Livros(LivrosFormRequest $request)
    {
        $Livros = livros::create([
            'titulo'=> $request->titulo,
            'autor'=> $request-> autor,
            'data_lancamento'=>$request->data_lancamento,
            'editora'=>$request-> editora ,
            'sinopse'=>$request->sinopse,
            'genero'=>$request->genero,
            'avaliacao'=>$request->avaliacao
        ]);
        
    
    return response()-> json ([
        'success'=> true,
        'message'=> "Livro cadastrado com sucesso",
        'data'=> $Livros
    ], 200);
}
}
