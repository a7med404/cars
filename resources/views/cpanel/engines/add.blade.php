
@extends('cpanel.layouts.layout')
@section('title')
  Add New Engine
@endsection
@section('header')
  <!-- icheck -->
  {!! Html::style(asset('admin/css/icheck-1.x/all.css')) !!}
@endsection

@section('content')
    <!-- Start  Breadcrumb -->
    <div class="row">
      <div class="col-lg-12  float-right">
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="{{ url('\cpanel') }}">HOME</a></li>
          <li><i class="fa fa-gears"></i><a href="{{ url('\cpanel\engines') }}">All Engines</a></li>
          <li><i class="fa fa-gear"></i>Add New Engine</li>
        </ol>
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
    <!-- End  Breadcrumb -->
    {!! Form::open(['route' => ['engines.store'], 'method' => "POST", 'class' => 'form']) !!}
    @include('cpanel.engines.form')
    {!! Form::close() !!}

@endsection

@section('footer')
    <!-- icheck -->
    {!! Html::script(asset('admin/js/icheck.min.js')) !!}
    <script>
      $(document).ready(function() {
        /*
            For iCheck =====================================>
        */
        $("input").iCheck({
            checkboxClass:"icheckbox_square-yellow",
            radioClass:"iradio_square-yellow",
            increaseArea:"20%" // optional
        });
      });
    </script>
@endsection
