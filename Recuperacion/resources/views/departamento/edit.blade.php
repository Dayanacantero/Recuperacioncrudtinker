<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('departamento.update', $departamento)}}"  method="POST">

        @csrf
        @method('put')
        <label>
        Nombre:
        <br>
        <input name="name" type="text" value="{{old('name',$departamento->name) }}">
        <br>
        </label>
        <br>
        <label>
        Presupuesto:
            <br>
            <input name="budget" type="text" value="{{old('budget',$departamento->budget) }}">
            <br>
            </label>
            <br>
        <br>
        <button  type="submit">Actualizar departamento</button>
       
    </form>
</body>
</html>