
@extends('website.layouts.layout')
@section('title')
  page title
@endsection
@section('header')
@endsection
@section('content')
<header class="header" id="header">
  @include('website.layouts.nav')
  <div class="slider">
    <div class="layout">
      <div class="container content">
        <h3 class="l-r-border text-uppercase">fine your <span>dream car</span></h3>
        <h1 class="text-capitalize">with Us fine your dream car</h1>
        <p class="text-uppercase">more than <span>12,000</span> car</p><a class="smoothscroll btn btn-custom text-uppercase" href="#search">see more <i class="fa fa-chevron-left"></i></a>
      </div>
    </div>
  </div>
</header>
<!-- Start search section-->
<section class="search" id="search">
  <div class="content">
    <div class="tabs">
      <ul class="nav nav-pills mb-3 text-center text-uppercase" id="pills-tab" role="tablist">
        <li class="nav-item active"><a class="nav-link" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">all cars</a></li>
        <li class="nav-item"><a class="nav-link" id="pills-new-tab" data-toggle="pill" href="#pills-new" role="tab" aria-controls="pills-new" aria-selected="true">new cars</a></li>
        <li class="nav-item"><a class="nav-link" id="pills-used-tab" data-toggle="pill" href="#pills-used" role="tab" aria-controls="pills-used" aria-selected="true">used cars</a></li>
        <li class="nav-item"><a class="nav-link" id="pills-used-tab" data-toggle="pill" href="car-details.html"><i class="fa fa-search"></i></a></li>
      </ul>
      <div class="tab-content sections-contents" id="pills-tabContent">
        <div class="tab-pane fade active in" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab"> 
          <form class="form" action="" method="post"> 
            <div class="row">
              <div class="level col-md-4 col-sm-6">
                <div class="custom-select">
                  <select name="level">
                    <option value="0">Select car brand</option>
                    <option value="3">Audi </option>
                    <option value="3">Land Rover </option>
                  </select>
                </div>
              </div>
              <div class="model col-md-4 col-sm-6">
                <div class="custom-select"> 
                  <select name="level" value="3">
                    <option value="0"> Select model</option>
                    <option value="0"> Audi </option>
                    <option value="0">Land Rover </option>
                  </select>
                </div>
              </div>
              <div class="year col-md-4 col-sm-6"> 
                <div class="custom-select">
                  <select name="level" value="3">
                    <option value="0"> Select year</option>
                    <option value="0"> 2019 </option>
                    <option value="0"> 2018</option>
                  </select>
                </div>
              </div>
              <div class="level col-md-4 col-sm-6">
                <div class="custom-select">
                  <select name="level">
                    <option value="0">Kilometer</option>
                    <option value="3">Audi </option>
                    <option value="3">Land Rover </option>
                  </select>
                </div>
              </div>
              <div class="model col-md-4 col-sm-6"> 
                <div class="custom-select">
                  <select name="level" value="3">
                    <option value="0"> Fuel</option>
                    <option value="0"> Audi </option>
                    <option value="0">Land Rover </option>
                  </select>
                </div>
              </div>
              <div class="year col-md-4 col-sm-6">
                <div class="custom-select">
                  <select name="level" value="3">
                    <option value="0"> Select</option>
                    <option value="0"> 2019 </option>
                    <option value="0"> 2018 </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="price"> 
                  <input type="text" name="select-price">
                </div>
              </div>
              <div class="col-md-4">  
                <input class="btn btn-custom text-uppercase" id="name" type="submit" value="Search Now">
              </div>
            </div>
          </form>
        </div>
        <div class="tab-pane fade" id="pills-new" role="tabpanel" aria-labelledby="pills-new-tab">new</div>
        <div class="tab-pane fade" id="pills-used" role="tabpanel" aria-labelledby="pills-used-tab">used</div>
      </div>
    </div>
  </div>
</section>
<section class="under-search"></section>
<!-- Start services section-->
<section class="services" id="services">
  <div class="container">
    <div class="content text-center">
      <h3 class="text-capitalize l-r-border">enjoy with our <span>services</span></h3>
      <div class="service">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="stap"><img class="img-responsive" src="{{ asset('website/images/approval.svg') }}">
              <h3 class="text-uppercase">buy your dream car</h3>
              <p>search for  search for the car do you want</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="stap"><img class="img-responsive" src="{{ asset('website/images/schedule.svg') }}">
              <h3 class="text-uppercase">sell with best price</h3>
              <p>search for the car do want search for the car do you want</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="stap"><img class="img-responsive" src="{{ asset('website/images/team.svg') }}">
              <h3 class="text-uppercase">rent a lucury car </h3>
              <p>search for the car do you  for the car do you want</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Start show-cars section-->
<section class="show-cars" id="show-cars">
  <div class="container">
    <div class="text-center">
      <h3 class="text-capitalize l-r-border">our most  <span>popular cars</span></h3>
      <div class="tabs">
        <ul class="nav nav-pills mb-3 text-center text-uppercase" id="pills-tab" role="tablist">
          <li class="for-sell nav-item active"><a class="nav-link" id="pills-sell-tab" data-toggle="pill" href="#pills-sell" role="tab" aria-controls="pills-sell" aria-selected="true"> latest verticals on sell</a></li>
          <li class="for-rent nav-item"><a class="nav-link" id="pills-rent-tab" data-toggle="pill" href="#pills-rent" role="tab" aria-controls="pills-rent" aria-selected="true">latest verticals on rent</a></li>
        </ul>
        <div class="tab-content sections-contents" id="pills-tabContent">
          <div class="tab-pane fade active in" id="pills-sell" role="tabpanel" aria-labelledby="pills-sell-tab">
            <div class="cars-list scale">
              <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="car-card text-center">
                    <div class="car-img"><img class="img-responsive img-fluid" src="{{ asset('website/images/pexels-photo-981041.jpeg') }}"></div>
                    <div class="detail">
                      <p class="time">10 minute a go <i class="fa fa-clock"></i> </p>
                      <h3 class="text-uppercase">car title name car</h3><span class="price"><a>$35,50 </a></span><span class="kilo"><a>50,000 KM <i class="fa fa-tachometer"></i></a></span>
                      <ul class="list-unstyled">
                        <li><a>Used </a></li>
                        <li><a>2013 </a></li>
                        <li><a>manual </a></li>
                        <li><a>petrole  </a></li>
                      </ul>
                      {{-- <a class="btn btn-custom text-uppercase" href="{{ route('cars.show', ['id' => $car->id]) }}">read more <i class="fa fa-chevron-left"></i></a> --}}
                      <a class="btn btn-custom text-uppercase" href="{{ route('cars.show', ['id' => 2]) }}">read more <i class="fa fa-chevron-left"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="car-card text-center">
                    <div class="car-img"><img class="img-responsive" src="{{ asset('website/images/cool (338).jpg') }}"></div>
                    <div class="detail">
                      <p class="time">5 minute a go</p>
                      <h3 class="text-uppercase">car title name</h3><span class="price"><a>$35,50 </a></span><span class="kilo"><a>50,000 KM <i class="fa fa-home"></i></a></span>
                      <ul class="list-unstyled">
                        <li><a>Used </a></li>
                        <li><a>2013 </a></li>
                        <li><a>manual </a></li>
                        <li><a>petrole </a></li>
                      </ul><a class="transition" href="">
                      <a class="btn btn-custom text-uppercase">read more <i class="fa fa-chevron-left"></i></a></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="car-card text-center">
                    <div class="car-img"><img class="img-responsive" src="{{ asset('website/images/logos-background.jpg') }}"></div>
                    <div class="detail">
                      <p class="time">5 minute a go</p>
                      <h3 class="text-uppercase">car title name</h3><span class="price"><a>$35,50 </a></span><span class="kilo"><a>50,000 KM <i class="fa fa-home"></i></a></span>
                      <ul class="list-unstyled">
                        <li><a>Used </a></li>
                        <li><a>2013 </a></li>
                        <li><a>manual </a></li>
                        <li><a>petrole  </a></li>
                      </ul>
                      <a class="btn btn-custom text-uppercase">read more <i class="fa fa-chevron-left"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="car-card text-center">
                    <div class="car-img"><img class="img-responsive" src="{{ asset('website/images/cool (302).jpg') }}"></div>
                    <div class="detail">
                      <p class="time">5 minute a go</p>
                      <h3 class="text-uppercase">car title name</h3><span class="price"><a>$35,50 </a></span><span class="kilo"><a>50,000 KM <i class="fa fa-home"></i></a></span>
                      <ul class="list-unstyled">
                        <li><a>Used </a></li>
                        <li><a>2013 </a></li>
                        <li><a>manual</a></li>
                        <li><a>petrole </a></li>
                      </ul>
                      <button class="btn btn-custom text-uppercase">read more <i class="fa fa-chevron-left"></i></button>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="car-card text-center">
                    <div class="car-img"><img class="img-responsive" src="{{ asset('website/images/auto-racing-automobiles-automotive-39855.jpg') }}"></div>
                    <div class="detail">
                      <p class="time">5 minute a go</p>
                      <h3 class="text-uppercase">car title name</h3><span class="price"><a>$35,50 </a></span><span class="kilo"><a>50,000 KM <i class="fa fa-home"></i></a></span>
                      <ul class="list-unstyled">
                        <li><a>Used </a></li>
                        <li><a>2013 </a></li>
                        <li><a>manual </a></li>
                        <li><a>petrole  </a></li>
                      </ul>
                      <button class="btn btn-custom text-uppercase">read more <i class="fa fa-chevron-left"></i></button>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="car-card text-center">
                    <div class="car-img"><img class="img-responsive" src="{{ asset('website/images/cool (92).jpg') }}"></div>
                    <div class="detail">
                      <p class="time">5 minute a go</p>
                      <h3 class="text-uppercase">car title name</h3><span class="price"><a>$35,50 </a></span><span class="kilo"><a>50,000 KM <i class="fa fa-home"></i></a></span>
                      <ul class="list-unstyled">
                        <li><a>Used </a></li>
                        <li><a>2013 </a></li>
                        <li><a>manual </a></li>
                        <li><a>petrole</a></li>
                      </ul>
                      <button class="btn btn-custom text-uppercase">read more <i class="fa fa-chevron-left"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-rent" role="tabpanel" aria-labelledby="pills-rent-tab"> 
            <div class="no-found"><img class="img-responsive" src="{{ asset('website/images/schedule.svg') }}">
              <h3 class="text-uppercase">sell with best price</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Start brands section-->
<section class="brands" id="barnds">
  <div class="layout">
    <div class="container">
      <div class="text-center scale">
        <h3 class="text-capitalize l-r-border">our most <span>popular brands</span> </h3>
        <p class="lead">our most popular brands our most popular</p>
        <ul class="list-unstyled">
          <li><a><img class="img-responsive" src="{{ asset('website/images/mercedes-benz.svg') }}"></a></li>
          <li><a><img class="img-responsive" src="{{ asset('website/images/honda.svg') }}"></a></li>
          <li><a><img class="img-responsive" src="{{ asset('website/images/chevrolet.svg') }}"></a></li>
          <li><a><img class="img-responsive" src="{{ asset('website/images/hyundai.svg') }}"></a></li>
          <li><a><img class="img-responsive" src="{{ asset('website/images/toyota.svg') }}"></a></li>
        </ul>
        <button class="btn btn-custom text-uppercase">all brands <i class="fa fa-home"></i></button>
      </div>
    </div>
  </div>
</section>
<!-- Start testimonials section-->
<section class="testimonials" id="testimonials">
  <div class="container">
    <div class="content text-center">
      <h3 class="text-capitalize l-r-border">What out happy Clients <span>say</span></h3>
      <p class="line"></p>
      <div class="testimonial">
        <div class="div carousel slide" data-ride="carousel" id="quote-carousel">
          <div class="carousel-inner text-center">
            <div class="item active">
              <blockquote>
                <div class="row">
                  <div class="col-sm-8 col-sm-offset-2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p><small class="text-capitalize">Someone famous</small>
                  </div>
                </div>
              </blockquote>
            </div>
            <div class="item">
              <blockquote>
                <div class="row">
                  <div class="col-sm-8 col-sm-offset-2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p><small class="text-capitalize">Someone famous</small>
                  </div>
                </div>
              </blockquote>
            </div>
            <div class="item">
              <blockquote>
                <div class="row">
                  <div class="col-sm-8 col-sm-offset-2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p><small class="text-capitalize">Someone famous</small>
                  </div>
                </div>
              </blockquote>
            </div>
          </div>
          <ol class="carousel-indicators">
            <li class="active" data-target="#quote-carousel" data-slide-to="0"> <img class="img-fluid img-circle img-responsive" src="{{ asset('website/images/profile-image.jpg') }}" alt=""></li>
            <li data-target="#quote-carousel" data-slide-to="0"> <img class="img-responsive" src="{{ asset('website/images/profile-image.jpg') }}" alt=""></li>
            <li data-target="#quote-carousel" data-slide-to="0"> <img class="img-fluid img-responsive" src="{{ asset('website/images/profile-image.jpg') }}" alt=""></li>
          </ol><a class="left carousel-control" data-slide="prev" href="#quote-carousel"><i class="fa fa-arrow-left"></i></a><a class="right carousel-control" data-slide="next" href="#quote-carousel"><i class="fa fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Start help section-->
<section class="help" id="help">
  <div class="container">
    <p>need help call us?<span>(+249) 2826-4846</span></p>
  </div>
</section>
@endsection