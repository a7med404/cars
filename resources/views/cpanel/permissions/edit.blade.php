@extends('cpanel.layouts.layout')
@section('title')
Edit Permission
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
                <li><i class="fa fa-users"></i><a href="{{ url('\cpanel\permissions') }}">All Permissions</a></li>
                <li><i class="fa fa-laptop"></i>
                    <a href="{{ url('/cpanel/permissions/'.$permissionInfo->id) }}">
                        Permission Information {{ $permissionInfo->name }}
                    </a>
                </li>
            </ol>
        </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
    <!-- End  Breadcrumb -->

    {!! Form::model($permissionInfo, ['route' => ['permissions.update', $permissionInfo->id], 'method' => "PATCH"]) !!}
      @include('cpanel.permissions.form')
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
