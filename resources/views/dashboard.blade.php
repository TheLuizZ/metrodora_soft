@extends('adminlte::page')

@section('title', 'Metrodora_Soft')

@section('content_header')
    <h1>Bienvenidos a Metrodora_Soft</h1>
@stop

@section('content')
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Nuevos</h3>
                <p>Datos de persona</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/pertel" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Personas</h3>

                <p>ㅤ</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-stalker"></i>
              </div>
              <a href="/personas" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
         <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>Telefonos</h3>

                <p>ㅤ</p>
              </div>
              <div class="icon">
                <i class="ion ion-iphone"></i>
              </div>
              <a href="/telefonos" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="card-body">
              <p>ㅤ</p>
              <p>ㅤ</p>
                <ul class="todo-list" data-widget="todo-list">
                  <li>

                  <h3>Objetivo General</h3>
                  <h5>Diseñar, crear e implementar un sistema de información que sea multiplataforma, seguro, 
íntegro y siempre disponible. un software que nos permite escalar fácilmente en recursos y 
funciones , amigable con el usuario, con un flujo de datos de alto rendimiento, que optimice 
la calidad, los procesos, recursos y tiempos para disminuir costos, un software que aporte 
una excelente relación costo/beneficio que le permita el control eficiente y el crecimiento de 
su compañía.</h5>    


              
              <p>ㅤ</p>
              <p>ㅤ</p>
                

                  <h3>Porque Metrodora?</h3>
                  <h5>Metrodora, conocida también como Cleopatra Metrodora, fue una
ginecóloga extremadamente capacitada que actuó también como partera y
cirujana. Dejó escritos la mayoría de sus conocimientos clasificados por
orden alfabético, como si se tratara de una enciclopedia, para poder ser
consultados con rapidez. Sus textos médicos se consideran los más
antiguos escritos por una mujer.</h5>
                    
              

            



          
          
@stop

@section('css')

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel=stylesheet'>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

<script> 

</script>
@stop
