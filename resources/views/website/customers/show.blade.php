@extends('cpanel.layouts.layout')
@section('title')
  Customer Informations
@endsection 
@section('header')
@endsection

                    @section('content')
                        <!-- Start  Breadcrumb -->
                        <div class="row">
                            <div class="col-lg-12  float-right">
                                <ol class="breadcrumb">
                                    <li><i class="fa fa-home"></i><a href="{{ url('\cpanel') }}">HOME</a></li>
                                    <li><i class="fa fa-users"></i><a href="{{ url('\cpanel\customers') }}">All Customers</a></li>							  	
                                    <li><i class="fa fa-user"></i>Customer Informations</li>						  	
                                </ol>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                        <!-- End  Breadcrumb -->
                        
                        


                <div class="x_panel">
                  <div class="x_title">
                    <h2> {{ $customerInfo->first_name." ".$customerInfo->last_name}} </h2>
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
                      
                <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          {{-- <img class="img-responsive avatar-view"> --}}
                        </div>
                      </div>
                      <h3>{{ $customerInfo->first_name." ".$customerInfo->last_name}}</h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> Khartoum, SUDAN
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> {{ $customerInfo->phone_number }}
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
                          <a href="http://www.kimlabs.com/profile/" target="_blank">www.kimlabs.com</a>
                        </li>
                      </ul>

                      <a href="{{ route('customers.edit', ['id' => $customerInfo->id]) }}" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                      <br />

                      <!-- start skills -->
                      <ul class="list-unstyled user_data">
                        <li>
                          <p><h4>Has cars</h4></p>
                          <div class="btn btn-info">
                            {{ $customerInfo->cars->count() }}
                          </div>
                        </li>
                      </ul>
                      <!-- end of skills -->

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="profile_title">
                        <div class="col-md-6">
                          <h2>Customer Activity Report</h2>
                        </div>
                        <div class="col-md-6">
                          <div id="reportrange" class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                            <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                          </div>
                        </div>
                      </div>
                      <!-- start of user-activity-graph -->
                      {{-- <div id="graph_bar" style="width:100%; height:280px;"></div> --}}
                     

                      <!-- end of user-activity-graph -->

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"> cars </a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Projects Worked on</a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <!-- start Last cars -->
                            <ul class="messages">
                              @foreach($customerInfo->cars as $car) 
                              <li>
                                {{-- <img src="{{ getCustomerImageOrDefaultImage($car->image) }}" class="avatar" alt="Avatar"> --}}
                                <div class="message_date"> 
                                  <h3 class="date text-info">{{ customDate($car->created_at) }}</h3>
                                  {{-- <p class="month">{{ getcarPrice($car->max_price, $car->min_price) }} $</p>
                                  <p class="month "> {{ getBalance($car->max_price, $car->min_price) }min_price} $</p> --}}
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading">{{ $car->name }}</h4>
                                  <blockquote class="message">{{ $car->description }}</blockquote>
                                  <br />
                                    <ul class="">
                                        <li class=""><strong> Department: </strong><a>{{ $car->department->name }}</a>
                                        </li>
                                        <li class=""><strong> Level: </strong><a>{{ level()[$car->level] }}</a> 
                                        </li>
                                        <li class=""><strong> Status: </strong><a>{{ status()[$car->status] }}</a>
                                        </li>
                                        <li class=""><strong> Powered By: </strong>
                                          <a>
                                            @if(isset($car->provider->profile->first_name))
                                              {{ $car->provider->profile->first_name." ".$car->provider->profile->last_name }}
                                            @else
                                              Not Accepted
                                            @endif
                                          </a>
                                        </li>
                                    </ul>
                                  <p class="url">
                                    
                                  </p>
                                </div>
                              </li>
                              <div class="tags">
                                    <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                    <a href="#"><i class="fa fa-paperclip"></i><strong> Tages </strong></a><br />
                                    {{-- @foreach($car->jobs as $job)
                                        <a href="#" class="tag"><i class="fa fa-tag"></i> {{ $job->name }} </a>
                                    @endforeach --}}
                              </div>
                              @endforeach

                            </ul>
                            <!-- end Last cars -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                            <!-- start customers projects -->
                            @if($customerInfo->cars->count() > 0)
                            <div class="table-responsive">
                              <table class="data table table-striped no-margin">
                                <thead>
                                  <tr>
                                      <th>#ID</th>
                                      <th>Title</th>
                                      <th>Price</th>
                                      <th>sub</th>
                                      <th>Status</th>
                                      <th>Level</th>
                                      <th>Options</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php $id = 0 ?>
                                    @foreach($customerInfo->cars as $car) 
                                  <tr>
                                    <td>{{ ++$id }}</td>
                                    <td>{{ $car->title }}</td>
                                    {{-- <td>{{ getcarPrice($car->max_price, $car->min_price) }}</td>
                                    <td>{{ getBalance($car->max_price, $car->min_price) }}</td> --}}
                                    <td>{{ status()[$car->status] }}</td>
                                    <td>{{ level()[$car->level] }}</td>
                                    <td>
                                      <a class="btn btn-info btn-xs"   href="{{ route('cars.edit', ['id' => $car->id]) }}">Edit</a>
                                      <a class="btn btn-danger btn-xs" href="{{ url('cpanel/car/'.$car->id.'/delete') }}">Delete</a>
                                    </td>
                                  </tr>
                                  @endforeach
                                  
                                </tbody>
                              </table>
                            </div>
                            @else
                                <p> No cars To Show...</p>
                            @endif
                            <!-- end customers projects -->

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
