@extends('adminlte::page')

@section('title', 'Metrodora_Soft')

@section('content_header')
    <h1>Nueva Persona XD</h1>
    <h5>ㅤ</h5>

@stop

@section('content')

<form action="/personas" method="POST">
    @csrf
    <h5> Datos personales</h5>
<div class="mb-3">
    <label for="" class="form-label">IDENTIDAD</label>
    <input id="identidad" name="identidad" type="text" class="form-control" tabindex="1" value="{{old('identidad')}}">
    @error('identidad')
        <small>*{{$message}}</small>
        <br>
    @enderror
</div>
<div class="mb-3">
    <label for="" class="form-label">NOMBRE</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2" value="{{old('nombre')}}">
    @error('nombre')
        <small>*{{$message}}</small>
        <br>
    @enderror
</div>
<div class="mb-3">
    <label for="" class="form-label">SEXO (M,F)</label>
    <input id="sex" name="sex" type="text" class="form-control" tabindex="3" value="{{old('sex')}}">
    @error('sex')
        <small>*{{$message}}</small>
        <br>
    @enderror
</div>
<div class="mb-3">
    <label for="" class="form-label">CIVIL (C,V,D,S)</label>
    <input id="civil" name="civil" type="text" class="form-control" tabindex="4" value="{{old('civil')}}">
    @error('civil')
        <small>*{{$message}}</small>
        <br>
    @enderror
</div>
<div class="mb-3">
    <label for="" class="form-label">EDAD</label>
    <input id="edad" name="edad" type="number" class="form-control" tabindex="5" value="{{old('edad')}}">
    @error('edad')
        <small>*{{$message}}</small>
        <br>
    @enderror
</div>
<div class="mb-3">
    <label for="" class="form-label">USUARIO</label>
    <input id="usuario" name="usuario" type="text" class="form-control" tabindex="6" value="{{old('usuario')}}">
    @error('usuario')
        <small>*{{$message}}</small>
        <br>
    @enderror
</div>
<div class="mb-3">
    <label for="" class="form-label">TIPO (E,P)</label>
    <input id="tipo" name="tipo" type="text" class="form-control" tabindex="7" value="{{old('tipo')}}">
    @error('tipo')
        <small>*{{$message}}</small>
        <br>
    @enderror
    <h5>ㅤ</h5>
<!-- /                                  / -->
<h5>Datos Telefonicos</h5>

<form action="/telefonos" method="POST">
    @csrf
<div class="mb-3">
    <label for="" class="form-label">NUMERO</label>
    <input id="numero" name="numero" type="text" class="form-control" tabindex="8" value="{{old('numero')}}">
    @error('numero')
        <small>*{{$message}}</small>
        <br>
    @enderror
</div>
<div class="mb-3">
    <label for="" class="form-label">TIPO (C,T,P)</label>
    <input id="tipo" name="tipo" type="text" class="form-control" tabindex="9" value="{{old('tipo')}}">
    @error('tipo')
        <small>*{{$message}}</small>
        <br>
    @enderror
    </div>
<button type="submit" class="btn btn-primary" tabindex="11">Guardar</button>
</form>

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

@stop