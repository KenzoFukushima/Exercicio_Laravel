@extends('layout.main_layout')

@section('content')
    <h1>Calculo IMC</h1>
    <form method='post' action='/imc/calcular'>
        @csrf
        <p>Peso:</p><br>
        <input type="number" name="peso" step="0.01"><br>
        <p>Altura:</p> <br>
        <input type="number" name="altura" step="0.01"><br><br>
        <button type="submit">Enviar</button>
    </form>
@endsection