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
        $peso = $request->input('peso');
        $altura = $request->input('altura');

        $imc = $peso / ($altura * $altura);

        if ($imc < 18.5) {
            $classificacao = "Abaixo do peso";
        } elseif ($imc < 24.9) {
            $classificacao = "Normal";
        } elseif ($imc < 29.9) {
            $classificacao = "Sobrepeso";
        } else {
            $classificacao = "Obesidade";
        }

        return view('imc.resultado', compact('imc', 'classificacao'));
    }
}
