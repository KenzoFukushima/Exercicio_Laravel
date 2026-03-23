@extends('layout.main_layout')

@section('content')
    <h1>Resultado</h1>
    <p>Imc: {{$imc}}</p>
    <p>classificacao: {{ $classificacao }}</p>
@endsection