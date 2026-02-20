@extends('layout')

@section('conteudo')

<h1>Exercício 7</h1>
<form method="post" action="/resposta7">
    @CSRF
    <div class="mb-3">
        <label for="valor1" class="form-label">Informe a temperatura em °C</label>
        <input type="number" id="valor1" name="valor1" class="form-control" required="">
    </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($valor1, $celsius)
<p class="text-success">{{ $valor1 }} °F é igual a {{ $celsius }} °C</p>
@endisset

@endsection