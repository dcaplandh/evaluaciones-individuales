@extends('layouts.app')

@section('content')
  <div class="container" style="display:relative;">
    <div style="width:100px;height:100px;background:red;position:relative;display:inline-block;"></div>
    <div style="width:100px;height:100px;background:green;position:relative;display:inline-block;"></div>
    <div style="width:100px;height:100px;background:violet;position:relative;display:inline-block;"></div>
    <h2>Regla CSS</h2>
  <form action="" method="post">
    @csrf
    <label for="exampleInputEmail1">Escribir la propiedad y el valor para poder poner el cuadrado violeta primero a la izquierda.</label>

    <div class="row">
      <div class="form-group col-2">
        <input type="text" class="form-control" name="prop" placeholder="Propiedad">
      </div>
        <strong>:</strong>
      <div class="form-group col-2">
        <input type="text" class="form-control" name="value" placeholder="Valor">
      </div>
        <strong>;</strong>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
  </div>
@endsection
