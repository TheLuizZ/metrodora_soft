@extends('adminlte::page')

@section('title', 'Metrodora_Soft')

@section('content_header')
    <h1>Editar Registro</h1>
@stop

@section('content')
<form action="/personas/{{ $persona->id}}" method="POST">
    @csrf
    @method('PUT')
<div class="mb-3">
    <label for="" class="form-label">IDENTIDAD</label>
    <input id="identidad" name="identidad" type="text" class="form-control" value="{{old('identidad', $persona->IDENTIDAD)}}">
    @error('identidad')
        <small>*{{$message}}</small>
        <br>
    @enderror
</div>
<div class="mb-3">
    <label for="" class="form-label">NOMBRE</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{old('nombre', $persona->NOM_PERSONA)}}">
    @error('nombre')
        <small>*{{$message}}</small>
        <br>
    @enderror
</div>
<div class="mb-3">
    <label for="" class="form-label">SEXO (M,F)</label>
    <input id="sex" name="sex" type="text" class="form-control" value="{{old('sex', $persona->SEX_PERSONA)}}">
    @error('sex')
        <small>*{{$message}}</small>
        <br>
    @enderror
</div>
<div class="mb-3">
    <label for="" class="form-label">CIVIL (C,V,D,S)</label>
    <input id="civil" name="civil" type="text" class="form-control" value="{{old('civil', $persona->IND_CIVIL)}}">
    @error('civil')
        <small>*{{$message}}</small>
        <br>
    @enderror
</div>
<div class="mb-3">
    <label for="" class="form-label">EDAD</label>
    <input id="edad" name="edad" type="number" class="form-control" value="{{old('edad', $persona->EDAD_PERSONA)}}">
    @error('edad')
        <small>*{{$message}}</small>
        <br>
    @enderror
</div>
<div class="mb-3">
    <label for="" class="form-label">USUARIO</label>
    <input id="usuario" name="usuario" type="text" class="form-control" value="{{old('usuario', $persona->USR_REGISTRO)}}">
    @error('usuario')
        <small>*{{$message}}</small>
        <br>
    @enderror
</div>
<div class="mb-3">
    <label for="" class="form-label">TIPO (E,P)</label>
    <input id="tipo" name="tipo" type="text" class="form-control" value="{{old('tipo', $persona->TIPO_PERSONA)}}">
    @error('tipo')
        <small>*{{$message}}</small>
        <br>
    @enderror
</div>
<a href="/personas" class="btn btn-secondary" >Cancelar</a>
<button type="submit" class="btn btn-primary" >Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop