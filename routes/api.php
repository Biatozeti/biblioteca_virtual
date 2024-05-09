<?php

use App\Http\Controllers\LivrosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('livros/cadastro',[LivrosController::class,'store']);
Route::post('livros/titulo',[LivrosController::class, 'pesquisarPorTitulo']);
Route::get('livros/find/{id}',[LivrosController::class,'pesquisaPorId']);
Route::get('livros/retornarTodos',[LivrosController::class, 'retornarTodos']);
Route::delete('livros/excluir/{id}',[LivrosController::class,'excluir']);
Route::put('livros/update',[LivrosController::class, 'update']);