@extends('adminlte::layouts.app')
@section('htmlheader_title')
{{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')

 <div class="col-lg-8">
    <img style="border: blue solid;border-width:5px; width: 1075px; height: 400px"  src="{{ asset('/img/auto6.png') }}" alt="">
 </div>
@endsection
