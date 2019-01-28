@extends('layouts.app')

@section('content')

  <div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Module</th>
        <th scope="col">Answers</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($answers as $answer)
        <tr>
          <th scope="row">{{$answer->id}}</th>
          <td>{{$answer->user->name}}</td>
          <td>{{$answer->module->name}}</td>
          <td>{{$answer->answer}}</td>
        </tr>

      @endforeach


    </tbody>
  </table>
  </div>
@endsection
