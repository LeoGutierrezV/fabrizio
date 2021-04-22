@extends('layouts.base')

@section('title','Profile')

@section('body')

<style>
    .form-profile-style{
        max-width: 40%;
    }
</style>


@include('shared.menu')
<div class="container ">
    <div class="profileSpace">
        <div class="card" style="margin-top:5%;margin-bottom:5%;">
            <div class="card-header">
                Perfil de Usuario
            </div>
            <div class="container text-start" style="padding:4%;">
                <div class="row">
                    <div class="col">
                        <form action="/profile/edit" method="post" id="form">
                        <div class="form-group">
                            <label for="email">Correo Electronico</label>
                            <input name="email" type="email" class="form-control form-profile-style" id="email" value="{{$user->email}}"  required readonly>
                            
                        </div>
                        <div class="form-group">
                            <label for="name">Nombres</label>
                            <input name="name" type="text" class="form-control form-profile-style" id="name" value="{{$user->name}}"  required readonly>
                            
                        </div>
                        <div class="form-group">
                            <label for="last_name">Apellidos</label>
                            <input name="last_name" type="text" class="form-control form-profile-style" id="last_name" value="{{$user->last_name}}"  required readonly>
                            
                        </div>
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input onkeypress='validate(event)' name="telefono"min="1" type="tel" class="form-control form-profile-style" id="telefono" value="{{$user->telefono}}"  required readonly>
                            
                        </div>
                        {{csrf_field()}}
                        </form>
                        <div class="container">
                            <button onclick="perfil(true)" id="btnEditar" class="btn btn-warning btn-block" style="max-width:45%; ">Editar</button>
                            <button onclick="perfil(false)" id="btnGuardar" class="btn btn-success btn-block" style="max-width:45%;display: none">Guardar</button>
                        </div>

                    </div>
                    <div class="col">
                        <div class="container text-center" style="padding: 4%;">
                            <h1>pedidos</h1>
                            @foreach ($pedidos as $p)
                            <div class="card text-center">
                                <p>{{$p['codigo_pago']}}</p>
                                <p>{{$p['estado']}}</p>
                                <p>{{$p['Completado']}}</p>
                                <p>{{$p['subtotal']}}</p>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
            
           
           

        </div>
    </div>

</div>




<script>
    let editar = document.getElementById('btnEditar');
    let guardar = document.getElementById('btnGuardar');
    let fields = [
        document.getElementById('email'),
        document.getElementById('name'),
        document.getElementById('last_name'),
        document.getElementById('telefono')
    ]
    function perfil(ocultar){
        if(ocultar){
            if(window.confirm('¿Desea usted editar los datos de su perfil?')){
                fields.forEach(e=>{
                    e.readOnly = false;
                });
                editar.style.display = 'none';
                guardar.style.display = 'block';
            }else{
                return;
            }
        }else{
            fields.forEach(e=>{
                e.readOnly = true;
            });
            let confirm = window.confirm('¿Desea usted Guardar los cambios en su Perfil?');
            if(confirm)
            {
                const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if(re.test(String(document.getElementById('email').value).toLowerCase())){
                    document.getElementById('form').submit();
                }
                else{
                    window.alert('El Correo Ingresado es Invalido');
                }
                


                
            }
            guardar.style.display = 'none';
            editar.style.display = 'block';
            
        }
    }

    function validate(evt) {
        var theEvent = evt || window.event;

        // Handle paste
        if (theEvent.type === 'paste') {
            key = event.clipboardData.getData('text/plain');
        } else {
        // Handle key press
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode(key);
        }
        var regex = /[0-9]|\./;
        if( !regex.test(key) ) {
            theEvent.returnValue = false;
            if(theEvent.preventDefault) theEvent.preventDefault();
        }
    }
</script>


@include('shared.footer')
@endsection