@extends('adminlte::page')

@section('title', 'Metrodora_Soft')

@section('content_header')
    <h1>Nuevo Telefono</h1>
@stop

@section('content')
<form action="/telefonos" method="POST">
    @csrf
<div class="mb-3">
    <label for="" class="form-label">NUMERO</label>
    <input id="numero" name="numero" type="text" class="form-control" tabindex="1" value="{{old('numero')}}">
    @error('numero')
        <small>*{{$message}}</small>
        <br>
    @enderror
</div>
<div class="mb-3">
    <label for="" class="form-label">TIPO (C,T,P)</label>
    <input id="tipo" name="tipo" type="text" class="form-control" tabindex="2" value="{{old('tipo')}}">
    @error('tipo')
        <small>*{{$message}}</small>
        <br>
    @enderror
</div>
<div class="mb-3">
    <label for="" class="form-label">USUARIO</label>
    <input id="usuario" name="usuario" type="text" class="form-control" tabindex="3" value="{{old('usuario')}}">
    @error('usuario')
        <small>*{{$message}}</small>
        <br>
    @enderror
</div>

<a href="/telefonos" class="btn btn-secondary" tabindex="4">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="5">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop