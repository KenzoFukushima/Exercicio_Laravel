<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImcController extends Controller
{
    public function form() {
        return view('formimc');
    }

    public function calcular(Request $request)
    {
        $peso = $request->peso;
        $altura = $request->altura;

        $imc = $peso / ($altura * $altura);

        number_format($imc, 2, ',', '.');

        if ($imc < 18.5) {
            $classificacao = "Abaixo do peso";
        } elseif ($imc >= 18.5 && $imc < 24.9) {
            $classificacao = "Normal";
        } elseif ($imc >= 25 && $imc < 29.9) {
            $classificacao = "Sobrepeso";
        } elseif ($imc >= 30) {
            $classificacao = "Obesidade";
        }

        $imc = number_format($imc, 2, ',', '.');

        return view('resultado', compact('imc', 'classificacao'));
    }
}
