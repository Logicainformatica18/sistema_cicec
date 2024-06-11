<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <th>Id </th>
            <th>name </th>
            <th>email </th>
    
        </thead>
       

    @foreach ($user as $users)
    <tr>
        <td>
            {{$users->id}}
   
        </td>
        
        <td>
            {{$users->name}}
   
        </td>
        <td>
            {{$users->email}}
   
        </td>
    </tr>
      
    @endforeach
</table>
    
</body>
</html>