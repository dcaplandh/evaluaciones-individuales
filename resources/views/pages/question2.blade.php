@extends('layouts.app')

@section('content')

  <script>
    function allowDrop(ev) {
      ev.preventDefault();
    }

    function drag(ev) {
      ev.dataTransfer.setData("text", ev.target.id);
    }

    function drop(ev) {
      ev.preventDefault();
      var data = ev.dataTransfer.getData("text");
      ev.target.appendChild(document.getElementById(data));
    }

    function send(){
      var div1 = document.querySelector('#div1').innerHTML;
      var div2 = document.querySelector('#div2').innerHTML;
      var div3 = document.querySelector('#div3').innerHTML;

      if(div2 != ""){
        window.location.href = "./question2/correct";
      }else{
        window.location.href = "./question2/incorrect";
      }

    }
  </script>

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <div class="container" style="display:relative;">
    <h2>Arrastrá el logo de PHP hacia el código de su lenguaje</h2>



  <form action="" method="post">
    @csrf

    <div class="row">
      <div class="col-2">
        <img id="drag1" style="width:150px;height:100px;  " src="https://cdn.jsdelivr.net/npm/@programming-languages-logos/php@0.0.0/php_256x256.png" draggable="true" ondragstart="drag(event)" width="336" height="69">
      </div>
      <div class="col-2 offset-1">
        <label for="exampleInputEmail1">console.log("Código");</label>
        <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)" style="border:1px solid black;width:100;height:100px;"></div>
      </div>
      <div class="col-2">
        <label for="exampleInputEmail1">$codigo = "valor";</label>
        <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)" style="border:1px solid black;width:100;height:100px;"></div>
      </div>
      <div class="col-2">
        <label for="exampleInputEmail1">#codigo{ }</label>
        <div id="div3" ondrop="drop(event)" ondragover="allowDrop(event)" style="border:1px solid black;width:100;height:100px;"></div>
      </div>

    </div>


    <button type="button" onclick="send();" class="btn btn-primary" style="float:right">Enviar</button>

  </form>
  </div>
@endsection
