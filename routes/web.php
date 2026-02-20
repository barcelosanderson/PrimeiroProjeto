<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ExercicioController;

Route::get('/paginainicial', function () {
    return view('welcome');
});

//Exercício 1
Route::get('/exercicio', [ExercicioController::class, 'exibirFormulario']);
Route::post('/resposta', [ExercicioController::class, 'calcularSoma']);

//Exercício 2
//Rota para abrir o formulário do exercício 2
Route::get('exercicio2', [ExercicioController::class, 'exibirFormulario2']);
//Rota para receber os dados do formulário do exercício 2
Route::post('/resposta2', [ExercicioController::class, 'calcularSub']);

//Exercício 3
Route::get('exercicio3', [ExercicioController::class, 'exibirFormulario3']);
Route::post('/resposta3', [ExercicioController::class, 'calcularMult']);

//Exercício 4
Route::get('exercicio4', [ExercicioController::class, 'exibirFormulario4']);
Route::post('/resposta4', [ExercicioController::class, 'calcularDiv']);

//Exercício 5
Route::get('exercicio5', [ExercicioController::class, 'exibirFormulario5']);
Route::post('/resposta5', [ExercicioController::class, 'calcularMedia']);

//Exercício 6
Route::get('exercicio6', [ExercicioController::class, 'exibirFormulario6']);
Route::post('/resposta6', [ExercicioController::class, 'calcularFahrenheit']);

//Exercício 7
Route::get('exercicio7', [ExercicioController::class, 'exibirFormulario7']);
Route::post('/resposta7', [ExercicioController::class, 'calcularCelsius']);

//Execício 8
Route::get('exercicio8', [ExercicioController::class, 'exibirFormulario8']);
Route::post('/resposta8', [ExercicioController::class, 'calcularArea']);