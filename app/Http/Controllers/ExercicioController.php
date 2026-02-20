<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioController extends Controller {
    public function exibirFormulario(){
        return view('exercicio');
    }

    public function calcularSoma(Request $request){
        $valor1 = $request->input('valor1');
        $valor2 = $request->input('valor2');
        $soma = $valor1 + $valor2;
        return view('exercicio', ['soma' => $soma]);
    }

    public function exibirFormulario2(){
        return view('exercicio2');
    }

    public function calcularSub(Request $request){
        $valor1 = $request->input('valor1');
        $valor2 = $request->input('valor2');
        $sub = $valor1 - $valor2;
        return view('exercicio2', ['sub' => $sub]);
    }

    //Exercício 3
    public function exibirFormulario3(){
        return view('exercicio3');
    }
    public function calcularMult(Request $request){
        $valor1 = $request->input('valor1');
        $valor2 = $request->input('valor2');
        $mult = $valor1 * $valor2;
        return view('exercicio3', ['mult' => $mult]);
    }

    //Exercício 4
    public function exibirFormulario4(){
        return view('exercicio4');
    }
    public function calcularDiv(Request $request){
        $valor1 = $request->input('valor1');
        $valor2 = $request->input('valor2');
        
        if ($valor2 != 0) {
            $div = $valor1 / $valor2;
            return view('exercicio4', ['div' => $div]);
        }
        else{
            return view('exercicio4', ['ndiv' => 0]);
        }
    }

    //Exercício 5
    public function exibirFormulario5(){
        return view('exercicio5');
    }
    public function calcularMedia(Request $request){
        $valor1 = $request->input('valor1');
        $valor2 = $request->input('valor2');
        $valor3 = $request->input('valor3');
        $media = ($valor1 + $valor2 + $valor3) / 3;
        return view('exercicio5', ['media' => $media]);
    }

    //Exercício 6
    public function exibirFormulario6(){
        return view('exercicio6');
    }
    public function calcularFahrenheit(Request $request){
        $valor1 = $request->input('valor1');
        $fahrenheit = ($valor1 * 1.8) + 32;
        return view('exercicio6', compact('valor1', 'fahrenheit'));
    }

    //Exercício 7
    public function exibirFormulario7(){
        return view ('exercicio7');
    }
    public function calcularCelsius(Request $request){
        $valor1 = $request->input('valor1');
        $celsius = ($valor1 - 32) * 5/9;
        return view('exercicio7', compact('valor1', 'celsius'));
    }

    //Exercício 8
    public function exibirFormulario8(){
        return view('exercicio8');
    }
    public function calcularArea(Request $request){
        $valor1 = $request->input('valor1');
        $valor2 = $request->input('valor2');
        $area = $valor1 * $valor2;
        return view('exercicio8', ['area' => $area]);
    }
}