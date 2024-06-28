<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
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



                <form action="" method="post" role="form" id="user" name="user">
                 <input type="hidden" name="id">
                    {{ csrf_field() }}
                    Nombres
                    <input type="text" name="name" class="form-control">
                    Email
                    <input type="text" name="email" class="form-control">
                    Contraseña

                    <input type="text" name="password" class="form-control">
                    <p></p>
                    <button class="btn btn-primary" onclick="userStore()">
                        Guardar
                    </button>
                    <button class="btn btn-primary" onclick="userUpdate()">
                        Modificar
                    </button>
                </form>



            </div>
            <div class="modal-footer">
                {{-- <input type="button" value="Nuevo" class="btn btn-warning"
                    onclick="New();$('#user')[0].reset(); user.fotografia.src='https://via.placeholder.com/150';"
                    name="new"> --}}
                {{-- <input type="button" value="Guardar" class="btn btn-success" onclick="userStore()" id="create">
                <input type="button" value="Modificar" class="btn btn-danger" onclick="userUpdate();"
                    id="update"> --}}
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="mycontent">
    @include('usertable')
</div>
