<html>
    <head>
    
    </head>

<body>
    <center><h1 class="text-center">Registrar Datos</h1></center>
<center>¡Ingrese los datos a registrar!</center>
<hr>
    <center>
<div class="container">
<form action="{{ route('persona.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre">
            </div>
        </div>
         <div class="col-md-12">
            <div class="form-group">
                <strong>Apellido:</strong>
                <input type="text" name="apellido" class="form-control" placeholder="Apellido">
            </div>
        </div>
         <div class="col-md-12">
            <div class="form-group">
                <strong>Fecha Nacimiento:</strong>
                <input type="text" name="fecha_nacimiento" class="form-control" placeholder="Fecha de nacimiento">
            </div>
        </div>
         <div class="col-md-12">
            <div class="form-group">
                <strong>Cedula Identidad:</strong>
                <input type="text" name="ci" class="form-control" placeholder="Cedula de Identidad">
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