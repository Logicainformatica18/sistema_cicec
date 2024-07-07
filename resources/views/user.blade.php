@extends("template")
@section('content')
<button type="button"onclick="New();$('#user')[0].reset()" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Agregar
</button>
<p></p>
@role('admin')
    hola admin
@endrole

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Mantenimiento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form action=""method="post" role="form" id="user" name="form">
                 <input type="hidden" name="id">
                    {{ csrf_field() }}
                    Nombres
                    <input type="text" name="name" class="form-control">
                    Email
                    <input type="text" name="email" class="form-control">
                    Contraseña

                    <input type="text" name="password" class="form-control">
                    <p></p>
                  
            



            </div>
            <div class="modal-footer">
                <button type="button"  class="btn btn-primary"name="btnguardar"id="create" onclick="userStore()">
                    Guardar
                </button>
                <button  type="button" class="btn btn-primary"name="btnmodificar"id="update" onclick="userUpdate()">
                    Modificar
                </button>
             
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="mycontent">
    @include('usertable')
</div>
@endsection