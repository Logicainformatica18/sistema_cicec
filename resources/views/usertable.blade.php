
<table border="1">
    <thead>
        <th>opciones</th>
        <th>Id </th>
        <th>name </th>
        <th>email </th>
        <th>Blog </th>
    </thead>


    @foreach ($user as $users)
        <tr>
            <td>
                <button class="btn bg-warning"
                data-toggle="modal" data-target="#exampleModal"
                onclick="userEdit('{{ $users->id }}');Up();">Editar</button>
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
            <td>
                @foreach ($users->blogs as $item)
                <a href="#"> {{ $item->description }} </a>
               
                @endforeach
               

            </td>
        </tr>
    @endforeach
</table>
