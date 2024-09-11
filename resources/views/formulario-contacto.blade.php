<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario de Contacto {{$tipo_persona}}</h1>
 
<h1>Create Post</h1>
 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<!-- Create Post Form -->

    <form action="/contacto-recibe" method="POST">

    @if($tipo_persona == 'cliente')
        <label for ="no_cliente"> Número de cliente: </label>
        <input type ="text" name="no_cliente" id="no_cliente"><br>
    @endif


        @csrf
        <label for= "nombre">Nombre:</label>
        @error('Nombre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type ="text" name="nombre" value="{{old ('nombre')}}"><br>
        
        <label for= "correo">Correo:</label>
        @error('Correo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type ="text" name="correo" value="{{old ('correo')}}"><br>
        
        <label for= "mensaje">Mensaje:</label><br>
        <textarea name="mensaje" cols="30" rows="40"></textarea>
        @error('Mensaje')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="submit" value="Enviar" value="{{old ('mensaje')}}">
        
    </form>
</body>
</html>