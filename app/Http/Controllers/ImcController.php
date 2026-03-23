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

        if ($imc < 18.5) {
            $classificacao = "Abaixo do peso";
        } elseif ($imc < 25) {
            $classificacao = "Normal";
        } elseif ($imc < 30) {
            $classificacao = "Sobrepeso";
        } else {
            $classificacao = "Obesidade";
        }

        return view('resultado', compact('imc', 'classificacao'));
    }
}
