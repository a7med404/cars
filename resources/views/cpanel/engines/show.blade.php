@extends('cpanel.layouts.layout')
@section('title')
  Engine Informations
@endsection
@section('header')
@endsection

                @section('content')
                  <!-- Start  Breadcrumb -->
                  <div class="row">
                    <div class="col-lg-12  float-right">
                      <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{ url('\cpanel') }}">HOME</a></li>
                        <li><i class="fa fa-users"></i><a href="{{ url('\cpanel\engines') }}">All Engines</a></li>
                        <li><i class="fa fa-user"></i>Engine Informations</li>
                      </ol>
                    </div><!-- /.col-lg-12 -->
                  </div><!-- /.row -->
                  <!-- End  Breadcrumb -->

                <div class="x_panel">
                  <div class="x_title">
                    <h2> {{ $engineInfo->name}} </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a></li>
                          <li><a href="#">Settings 2</a></li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view">
                        </div>
                      </div>
                      <h3>{{ $engineInfo->display_name}}</h3>
                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> {{ $engineInfo->name}} </li>
                        <li><i class="fa fa-briefcase user-profile-icon"></i> {{ $engineInfo->name}} </li>
                        <li class="m-top-xs">
                          {{-- <p class="lead"> {{ $engineInfo->description }} </p> --}}
                        </li>
                      </ul>
                      <a href="{{ route('engines.edit', ['id' => $engineInfo->id]) }}" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit engine</a>
                      <br />
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <div class="profile_title">
                        <div class="col-md-6">
                          <h2>Engine Activity Report</h2>
                        </div>
                      </div>
                      <!-- start of user-activity-graph -->
                      {{-- <div id="graph_bar" style="width:100%; height:280px;"></div> --}}

                      <!-- end of user-activity-graph -->
                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"> Cars </a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            Its Permissions
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              @endsection

@section('footer')
@endsection
