
@extends('cpanel.layouts.layout')
@section('title')
  Repports cars
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
                                    <li><i class="fa fa-users"></i> cars Repports </li>	
                                </ol>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                        <!-- End  Breadcrumb -->

                        <div class="x_panel">
                        <div class="x_title">
                            <h2> Repports cars </h2>
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
                      
                    
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="table_id">
                                <thead>
                                    <tr>
                                        <th>#ID</th>
                                        <th>Title</th>
                                        <th>Max Price</th>
                                        <th>Min Price</th>
                                        <th>Status</th>
                                        <th>Level</th>
                                        <th>Department</th>
                                        <th>Customer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cars as $car)
                                        <tr class="odd gradeX"> 
                                            <td>{{ $car->id }}</td>
                                            <td><a href="{{ route('cars.show', ['id' => $car->id]) }}">{{ $car->title }}</a></td>
                                            <td><a href="{{ route('cars.show', ['id' => $car->id]) }}">{{ $car->max_price." SD"  }}</a></td> 
                                            <td><a href="{{ route('cars.show', ['id' => $car->id]) }}">{{ $car->min_price." SD" }}</a></td>
                                            <td><a class="{{ toggleOneZeroClass()[$car->status] }}">{{ status()[$car->status] }}</a></td>
                                            <td><a class="{{ toggleLevelClass()[$car->level] }}" href="{{ route('cars.show', ['id' => $car->id]) }}">{{ level()[$car->level] }}</a></td>
                                            <td><a href="{{ route('cars.show', ['id' => $car->id]) }}" class="badge bg-main-color">{{ $car->department->name }}</td></a>
                                            <td><a href="{{ route('cars.show', ['id' => $car->id]) }}" class="badge bg-main-color">{{ $car->customer->first_name }}</td></a>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->

                    
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
        /* 
            For DataTable =====================================>
        */
        $("#table_id").DataTable({
            fixedHeader: true
            // paging   : false,
            // scrollY  : 400,
            // searching: false,
            // ordering : false,
            // select   : true
        });
    </script>
@endsection
