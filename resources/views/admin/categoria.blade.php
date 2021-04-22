@extends('layouts.base')

@section('title','Admin')

@section('body')
    @include('admin/menu')
    <div class="container" style="margin:auto; padding-top: 5%; padding-bottom:5%; max-width:50%;">
        @if($exists)
        <div class="alert alert-danger">No se puede Registrar la Categoria {{$name}} </div>
        @endif
        <form action="/admin/add/categoria" method="POST">
        <div class="form-group">
          <label for="exampleInputEmail1">Nombre de la categoria (Sin Espacios)</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="categoria"  required>
        </div>

        {{csrf_field()}}
        <button type="submit" class="btn btn-success btn-block">Crear Categoria</button>
      </form>
    </div>
@endsection