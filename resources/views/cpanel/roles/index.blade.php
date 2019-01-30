@extends('cpanel.layouts.layout')
@section('title')
All Roles
@endsection
@section('header')
<!-- icheck -->
{!! Html::style(asset('admin/css/icheck-1.x/all.css')) !!}
<!-- dataTable -->
{!! Html::style(asset('admin/css/dataTable/dataTables.bootstrap.min.css')) !!}
{!! Html::style(asset('admin/css/dataTable/jquery.dataTables.min.css')) !!}
@endsection

@section('content')
<!-- Start  Breadcrumb -->
<div class="row">
    <div class="col-lg-12  float-right">
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="{{ url('\cpanel') }}">HOME</a></li>
            <li><i class="fa fa-users"></i>All Roles </li>
        </ol>
    </div><!-- /.col-lg-12 -->
    <div class="col-lg-12">
        <a href="{{ route('roles.create') }}" class="btn-border bull-rigth">Add New Role</a>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
<!-- End  Breadcrumb -->

<div class="x_panel">
    <div class="x_title">
        <h2> All Roles </h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a>
                    </li>
                    <li><a href="#">Settings 2</a>
                    </li>
                </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <table class="table table-striped table-bordered table-hover" id="table_id">
            <thead>
                <tr>
                    <th>#ID</th>
                    {{-- <th>Name</th> --}}
                    <th>Display Name</th>
                    <th>Description</th>
                    {{-- <th>Permissions</th> --}}
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roles as $role)
                <tr>
                    <td>{{ $role->id }}</td>
                    {{-- <td>{{ $role->name }}</td> --}}
                    <td>{{ $role->display_name }}</td>
                    <td>{{ $role->description }}</td>
                    {{-- <td>
                                      @foreach ($role->permissions as $key => $role)
                                        {{ $role->display_name }}
                    @endforeach
                    </td> --}}
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-default btn-sm" href="{{ route('roles.show',  ['id' => $role->id]) }}"><i class="fa fa-arrows-alt"></i></a>
                            <a class="btn btn-info    btn-sm" href="{{ route('roles.edit',  ['id' => $role->id]) }}"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-danger  btn-sm confirm" href="{{ route('roles.delete',['id' => $role->id]) }}"> <i class="fa fa-times"></i></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@section('footer')
<!-- icheck -->
{!! Html::script(asset('admin/js/icheck.min.js')) !!}
<!-- dataTable -->
{!! Html::script(asset('admin/js/dataTable/jquery.dataTables.min.js')) !!}
{!! Html::script(asset('admin/js/dataTable/dataTables.bootstrap.min.js')) !!}
<script>
    $('#table_id').DataTable({
        //processing: true,
        //serverSide: true,
        // "columnDefs":[
        //     {
        //         "targets":[1, 3, 7],
        //         "orderable":false,
        //     },
        // ],
        "stateSave": false,
        "responsive": true,
        "order": [
            [0, 'desc']
        ],
        "pagingType": "full_numbers",
        aLengthMenu: [
            [10, 25, 50, 100, 200, -1],
            [10, 25, 50, 100, 200, "All"]
        ],
        iDisplayLength: 25,
        fixedHeader: true,

    });
</script>
@endsection
