<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Asociar:</h1>

    <form action="{{route('empleado_habilidad.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
     

        <br>
        <h1>Empleado:</h1>
        <select name="empleado_id">
            @foreach($empleados as $empleado)
                <option value="{{ $empleado->id }}">{{ $empleado->id }} - {{ $empleado->name }}</option>
            @endforeach
        </select>
        <br>
        <h1>Habilidad:</h1>    
        <select name="habilidad_id">
            @foreach($habilidads as $habilidad)
                <option value="{{ $habilidad->id }}">{{ $habilidad->id }} - {{ $habilidad->name }}</option>
            @endforeach
        </select>
 
       
         <br> <br>
        <button type="submit">Enviar Formulario:</button>
        </form>
 
</body>
</html>