<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/user/create', [UserController::class, 'create'])/* Aqui eu precisarei implementar o formulário de incerção no banco de dados */
    ->name('usuario.create');

// eu tenho que criar uma rota post para fazer a incerção no banco de dados
    
Route::get('/user/enter', [UserController::class, 'enter']) /* Aqui eu quero o formulario que vai fazer a verificação no banco de dados, a porta da frete */
    ->name('enter');

// eu tenho que criar uma rota post para receber os dados e fazer a validação no banco de dados 


Route::get('/user', [UserController::class, 'index']) /* Inicial page, aqui o usuário já tem acesso ao dashboard da aplicação */
   ->name('user');
