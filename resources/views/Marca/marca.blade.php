@extends('adminlte::layouts.app')
@section('main-content')
<div class="container">
  <div class="row">
    <div class="col-md-5 ">
      @include('Marca.registrarMarca')
    </div>
    <div class="col-md-6 ">
      @include('Marca.tablaMarca')
      @include('Marca.modificarMarca')
    </div>
  </div>
</div>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/marca.js"></script>
@endsection

