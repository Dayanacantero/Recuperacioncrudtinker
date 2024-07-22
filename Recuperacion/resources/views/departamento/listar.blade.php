<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>listar</h1>

    <table>

        @foreach ($departamentos as $departamento)
        {{-- creo una fila --}}
        <tr>
            <td>{{$departamento->id}}</td>
            <td>{{$departamento->name}}</td>
            <td>{{$departamento->budget}}</td>
            <td><a href="{{route('departamento.show',$departamento->id)}}">Mostrar</a></td>
            <td><a href="{{route('departamento.edit',$departamento->id)}}">Editar</a></td>
            <td>
                <form action="{{route('departamento.destroy',$departamento->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Eliminar</button>
                </form>  


            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>