@extends('adminlte::page')

@section('title', 'Metrodora_Soft')

@section('content_header')
    <h1>Lista de Telefonos</h1>
@stop

@section('content')
<a href="telefonos/create" class="btn btn-success mb-3">CREAR</a>

<table id="telefonos" class="table table-dark table-striped shadow-lg mt-1">
  <thead class="bg-yellow text-black">
      <tr>
          <th scope="col">ID</th>
          <th scope="col">Numero</th>
          <th scope="col">Tipo</th>
          <th scope="col">Usuario</th>
          <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($telefonos as $telefono)
    <tr>
    <td>{{ $telefono->id}}</td>
    <td>{{ $telefono->NUM_TELEFONO}}</td>
    <td>{{ $telefono->TIPO_TELEFONO}}</td>
    <td>{{ $telefono->USR_REGISTRO}}</td>
    <td>
        <form action="{{ route ('telefonos.destroy',$telefono->id)}}" method="POST">
        <a href="/telefonos/{{ $telefono->id }}/edit" class="btn btn-primary">Editar</a>
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
    $('#telefonos').DataTable({
        "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "all"]]
    });
} );
</script>
@stop