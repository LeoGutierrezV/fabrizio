@extends('layouts.base')

@section('title','Admin')

@section('body')
    @include('admin/menu')
    <div class="container" style="margin:auto; max-width: 50%; padding-top: 5%; padding-bottom: 5%;">

    <form action="/admin/add/product" method="POST">

        <div class="form-group">
        <label for="Input1">Nombre</label>
        <input type="text" class="form-control" id="Input1" name="nombre" required>
        </div>


        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descripcion</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion" required></textarea>
        </div>


        <div class="form-group">
            <label for="Input2">Precio</label>
            <input type="number" class="form-control" id="Input2" name="precio" required>
        </div>


        <div class="form-group">
            <label for="Input3">Inventario</label>
            <input type="number" class="form-control" id="Input3" name="inventario" required>
        </div>


        
        <div class="form-group">
            <label for="Input4">Categoria</label>
            <select class="form-control" id="Input4" name="categoria" required>
                <option>Seleccione una Categoria</option>
            @foreach($cat as $a)
                <option>{{$a['categoria_id']}}</option>
            @endforeach

        </select>
        </div>


        <div class="form-group">
            <label for="Input5">Color</label>
            <input type="text" class="form-control" id="Input5" name="color" required>
        </div>


        <div class="form-group">
            <label for="Input6">Talla</label>
            <select class="form-control" id="Input6" name="talla" required>
                    <option>Seleccione una Talla</option>
                @foreach(config('tallas') as $a)
                    <option>{{$a}}</option>
                @endforeach

            </select>
        </div>


        <div class="form-group">
            <label for="Input7">Imagen - 1</label>
            <input type="url" class="form-control" id="Input7" name="imagen1" required>
        </div>


        <div class="form-group">
            <label for="Input8">Imagen - 2</label>
            <input type="url" class="form-control" id="Input8" name="imagen2" required>
        </div>

        <div class="form-group">
            <label for="Input8">Imagen - 3</label>
            <input type="url" class="form-control" id="Input8" name="imagen3" required>
        </div>

        <div class="form-group">
            <label for="Input9">Imagen - 4</label>
            <input type="url" class="form-control" id="Input9" name="imagen4" required>
        </div>
        {{csrf_field()}}
        <button class="btn btn-success btn-block" type="submit">Crear Producto</button>
    </form>
</div>

@endsection