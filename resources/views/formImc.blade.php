@extends('layout.main_layout')

@section('content')
    <h1>Calculo IMC</h1>
    <form method='post' action='/imc/calcular'>
        @csrf
        <p>Peso:</p><br>
        <input type="number" name="peso"><br>
        <p>Altura:</p> <br>
        <input type="number" name="altura"><br><br>
        <button type="submit">Enviar</button>
    </form>
@endsection