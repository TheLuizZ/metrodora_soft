@extends('adminlte::page')

@section('title', 'Metrodora_Soft')

@section('content_header')
    <h1>Lista de Personas</h1>
@stop

@section('content')
<a href="personas/create" class="btn btn-success mb-3">CREAR</a>

<table id="personas" class="table table-dark table-striped shadow-lg mt-1">
  <thead class="bg-cyan text-white">
      <tr>
          <th scope="col">ID</th>
          <th scope="col">Identidad</th>
          <th scope="col">Nombre</th>
          <th scope="col">Sexo</th>
          <th scope="col">Civil</th>
          <th scope="col">Edad</th>
          <th scope="col">Usuario</th>
          <th scope="col">Tipo</th>
          <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($personas as $persona)
    <tr>
    <td>{{ $persona->id}}</td>
    <td>{{ $persona->IDENTIDAD}}</td>
    <td>{{ $persona->NOM_PERSONA}}</td>
    <td>{{ $persona->SEX_PERSONA}}</td>
    <td>{{ $persona->IND_CIVIL}}</td>
    <td>{{ $persona->EDAD_PERSONA}}</td>
    <td>{{ $persona->USR_REGISTRO}}</td>
    <td>{{ $persona->TIPO_PERSONA}}</td>
    <td>
        <form action="{{ route ('personas.destroy',$persona->id)}}" method="POST">
        <a href="/personas/{{ $persona->id }}/edit" class="btn btn-primary">Editar</a>
        @csrf 
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Borrar</button>
        </form>
        
    </td>
    </tr>
    @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel=stylesheet'>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

<script> 
$(document).ready(function() {
    $('#personas').DataTable({
        "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "all"]]
    });
} );
</script>
@stop