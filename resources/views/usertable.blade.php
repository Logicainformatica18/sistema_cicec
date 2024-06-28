
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
                <button class="btn bg-warning"
                data-toggle="modal" data-target="#exampleModal"
                onclick="userEdit('{{ $users->id }}')">Editar</button>
                <button class="btn bg-danger" onclick="userDestroy('{{ $users->id }}')">
                Borrar</button>

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
