
@extends('website.layouts.layout')
@section('title')
  page title
@endsection
@section('header')
@endsection
@section('content')
<header class="header" id="header">
  @include('website.layouts.nav')
</header>
  <!-- Start Content section-->
  {!! Form::open(['route' => ['cars.store'], 'method' => "POST", 'class' => 'form', 'files' => true]) !!}
  @include('website.cars.form')
  {!! Form::close() !!}
  <!-- End of start Page-->
@endsection