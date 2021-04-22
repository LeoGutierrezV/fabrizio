@extends('layouts.base')

@section('title','Crear Usuario')

@section('body')
@include('shared.menu')
<div class="container CreatePostContainer" style="max-width:500px; margin-top:5%;margin-bottom:5%; ">
    <form action="/signup" method="POST" >
        @if($validate['email'])
            <div class="alert alert-danger" role="alert">
                El Correo electronico ya esta en uso!
            </div>
        @endif

        @if($validate['username'])
            <div class="alert alert-danger" role="alert">
                El Numero de telefono ya esta en uso!
            </div>
        @endif
        
        <div class="form-group">
            <label for="nombre">Nombres</label>
            <input type="text" class="form-control" id="nombre" name="name" required>
        </div>

        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="last_name" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="dni">DNI</label>
            <input type="number" class="form-control" id="dni" name="dni" required>
        </div>

        <div class="form-group">
            <label for="signo">Signo</label>
            <input type="text" class="form-control" id="signo" name="signo" required>
        </div>

        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="tel" class="form-control" id="username" name="telefono" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" name="password" required>
        </div>



        {{csrf_field()}}
    <div class="row">
        <div class="col-12 text-center">
        <button type="submit" class="btn  block-black btn-block ">Crear Cuenta</button>
    </div>
    </div>
    </form>
</div>
@include('shared.footer')
@endsection