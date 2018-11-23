<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    </head>

<body>
    
    <center><h1>Modificar Registros</h1></center>
<center>¡Ingrese los datos a modificar!</center>
<hr>
    <center>
<div class="container">
<form action="{{ route('persona.update', $persona->id) }}" method="POST">
    @csrf
    @method('PUT')
  
     <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="nombre" value="{{ $persona->nombre}}" class="form-control" placeholder="Nombre">
            </div>
        </div>
         <div class="col-md-12">
            <div class="form-group">
                <strong>Apellido:</strong>
                <input type="text" name="apellido" value="{{ $persona->apellido}}" class="form-control" placeholder="Apellido">
            </div>
        </div>
         <div class="col-md-12">
            <div class="form-group">
                <strong>Fecha Nacimiento:</strong>
                <input type="text" name="fecha_nacimiento" value="{{ $persona->fecha_nacimiento}}" class="form-control" placeholder="Fecha de nacimiento">
            </div>
        </div>
         <div class="col-md-12">
            <div class="form-group">
                <strong>Cedula Identidad:</strong>
                <input type="text" name="ci" value="{{ $persona->ci}}" class="form-control" placeholder="Cedula de Identidad">
            </div>
        </div>
        
        <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
   
</form>
    
</div></center>

    </body>
</html>