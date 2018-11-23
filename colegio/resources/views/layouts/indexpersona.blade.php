@extends('layouts.admin')

@section('bienvenido')

<h1 class="text-center">Lista de Registro</h1>

<div class="container">
    
    <a class="btn btn-info mb-3" href="{{ route('persona.create') }}">Registrar Persona</a>
    
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Fecha nacimiento</th>
      <th scope="col">CI</th>
      <th scope="col">Modificar</th>
      <th scope="col">Eliminar</th>
        
    </tr>
  </thead>
  <tbody>
      @foreach($personas as $persona)
    <tr>
      <th scope="row">{{$persona->id}}</th>
      <td>{{$persona->nombre}}</td>
      <td>{{$persona->apellido}}</td>
      <td>{{$persona->fecha_nacimiento}}</td>
      <td>{{$persona->ci}}</td>
        
        <td><a class="btn btn-info" href="{{ route('persona.edit', $persona->id) }}">Editar</a></td>
      
            <td><form action="{{ route('persona.destroy',$persona->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
      
          <button type="submit" class="btn-sm btn-danger mt-3" onclick="return confirm('Quiere borrar el registro?')" >Eliminar</button>

                </form></td>
            
    </tr>
      @endforeach
  </tbody>
</table>
    </div>

@endsection