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
                

            
                    <form action="" method="POST"id="user">
                        @csrf
                        <input type="text" name="name">
                        <button class="btn btn-primary" onclick="userStore()">
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

<table border="1">
    <thead>
        <th>opciones</th>
        <th>Id </th>
        <th>name </th>
        <th>email </th>

    </thead>


    @foreach ($user as $users)
        <tr>
            <td>
                <a href="">Editar</a>
                <a href="">Borrar</a>
            </td>
            <td>
                {{ $users->id }}

            </td>

            <td>
                {{ $users->name }}

            </td>
            <td>
                {{ $users->email }}

            </td>
        </tr>
    @endforeach
</table>
