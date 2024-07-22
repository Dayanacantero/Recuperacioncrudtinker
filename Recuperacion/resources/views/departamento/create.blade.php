<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Crear Departamento</h1>

    <form action="{{route('departamentos.store')}}" method="POST" enctype="multipart/form-data">
    
    @csrf
    
    <label>
        Nombre:
        <br>
        <input type="text" name="name">
    </label>
    <br>
    <label>
        Presupuesto
        <br>
        <input type="text" name="budget">
    </label>
    <br>
    <br>
    <button type="submit">Enviar Formulario:</button>
    </form>
</body>
</html>