@extends('adminlte::layouts.app')
@section('main-content')
<div class="container">
  <div class="row">
    <div class="col-md-5">
      @include('Automovil.registrarAuto')
    </div>
    <div class="col-md-6">
      @include('Automovil.tablaAuto')
      @include('Automovil.modificarAuto')
    </div>
  </div>
</div>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/auto.js"></script>
@endsection