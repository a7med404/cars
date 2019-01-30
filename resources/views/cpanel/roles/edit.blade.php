@extends('cpanel.layouts.layout')
@section('title')
Edit Role
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
                <li><i class="fa fa-users"></i><a href="{{ url('\cpanel\roles') }}">All Roles</a></li>
                <li><i class="fa fa-laptop"></i>
                    <a href="{{ url('/cpanel/roles/'.$roleInfo->id) }}">
                        Role Information {{ $roleInfo->name }}
                    </a>
                </li>
            </ol>
        </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
    <!-- End  Breadcrumb -->

    {!! Form::model($roleInfo, ['route' => ['roles.update', $roleInfo->id], 'method' => "PATCH"]) !!}
      @include('cpanel.roles.form')
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
