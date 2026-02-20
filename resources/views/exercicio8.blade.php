@extends('layout')

@section('conteudo')

<h1>Exercício 8</h1>
<form method="post" action="/resposta8">
    @CSRF
    <div class="mb-3">
        <label for="valor1" class="form-label">Informe a largura do retângulo</label>
        <input type="number" id="valor1" name="valor1" class="form-control" required="">
    </div>
    <div class="mb-3">
        <label for="valor2" class="form-label">Informe a altura do retângulo</label>
        <input type="number" id="valor2" name="valor2" class="form-control" required="">
    </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($area)
<p class="text-success">A área do retângulo é: {{ $area}} u²</p>
@endisset

@endsection