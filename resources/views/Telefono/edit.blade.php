@extends('adminlte::page')

@section('title', 'Metrodora_Soft')

@section('content_header')
    <h1>Editar Registro</h1>
@stop

@section('content')
<form action="/telefonos/{{ $telefono->id}}" method="POST">
    @csrf
    @method('PUT')
<div class="mb-3">
    <label for="" class="form-label">NUMERO</label>
    <input id="numero" name="numero" type="text" class="form-control" value="{{old('numero', $telefono->NUM_TELEFONO)}}">
    @error('numero')
        <small>*{{$message}}</small>
        <br>
    @enderror
</div>
<div class="mb-3">
    <label for="" class="form-label">TIPO (C,T,P)</label>
    <input id="tipo" name="tipo" type="text" class="form-control" value="{{old('tipo', $telefono->TIPO_TELEFONO)}}">
    @error('tipo')
        <small>*{{$message}}</small>
        <br>
    @enderror
</div>
<div class="mb-3">
    <label for="" class="form-label">USUARIO</label>
    <input id="usuario" name="usuario" type="text" class="form-control" value="{{old('usuario', $telefono->USR_REGISTRO)}}">
    @error('usuario')
        <small>*{{$message}}</small>
        <br>
    @enderror
</div>

<a href="/telefonos" class="btn btn-secondary" >Cancelar</a>
<button type="submit" class="btn btn-primary" >Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop