@extends('layout')

@section('conteudo')

<h1>Exercício 6</h1>
<form method="post" action="/resposta6">
    @CSRF
    <div class="mb-3">
        <label for="valor1" class="form-label">Informe a temperatura em °C</label>
        <input type="number" id="valor1" name="valor1" class="form-control" required="">
    </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($valor1, $fahrenheit)
<p class="text-success">{{ $valor1 }} °C é igual a {{ $fahrenheit }} °F</p>
@endisset

@endsection