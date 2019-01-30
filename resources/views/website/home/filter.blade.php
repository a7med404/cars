
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
  <section class="filter" id="filter">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <h3 class="center text-capitalize">Filter <span>cars</span></h3><small>sing in to enjoying eith our services</small>
            <hr>
            <form class="form" action="" method="post">
              <div class="form-section">
                <div class="price"> 
                  <label class="custom-lable">Price</label>
                  <input type="text" name="select-price">
                </div>
                <div class="mileage">
                  <label class="custom-lable">Mileage</label>
                </div>
              </div>
              <hr>
              <h3 class="text-capitalize">car information</h3>
              <div class="form-section">
                <label class="custom-label">brand :&nbsp;</label>
                <div class="custom-select">
                  <select type="radio" name="level">
                    <option value="0">Select car brandSelect car brandSelect car brandSelect car brand</option>
                    <option value="3">Audi </option>
                    <option value="3">Land Rover </option>
                  </select>
                </div>
                <div class="model"> 
                  <label class="custom-lable">Model</label>
                  <div class="custom-select">
                    <select type="radio" name="level" value="3">
                      <option value="0"> Select model</option>
                      <option value="0"> Audi </option>
                      <option value="0">Land Rover </option>
                    </select>
                  </div>
                </div>
                <div class="year"> 
                  <label class="custom-lable">Year</label>
                  <div class="custom-select">
                    <select type="radio" name="level" value="3">
                      <option value="0"> Select year</option>
                      <option value="0"> 2019 </option>
                      <option value="0"> 2018 </option>
                    </select>
                  </div>
                </div>
              </div>
              <hr>
              <h3 class="text-capitalize">car information</h3>
              <div class="form-section">
                <div class="fuel-type"> 
                  <label class="custom-lable">Fuel Type</label>
                  <div class="form-group text-uppercase">
                    <div class="custom-lable-checkbox-radio">
                      <input id="petrol" name="fuel-type[]" type="checkbox">
                      <label class="custom-label" for="petrol">Petrol</label>
                    </div>
                    <div class="custom-lable-checkbox-radio">
                      <input id="diesel" name="fuel-type[]" type="checkbox">
                      <label class="custom-label" for="diesel">Diesel</label>
                    </div>
                    <div class="custom-lable-checkbox-radio">
                      <input id="CNG" name="fuel-type[]" type="checkbox">
                      <label class="custom-label" for="CNG">CNG</label>
                    </div>
                    <div class="custom-lable-checkbox-radio">
                      <input id="hybrid" name="fuel-type[]" type="checkbox">
                      <label class="custom-label" for="hybrid">Hybrid</label>
                    </div>
                  </div>
                </div>
                <div class="level"> 
                  <label class="custom-lable">car level</label>
                  <div class="custom-lable-checkbox-radio">
                    <input type="radio" name="level" value="1" id="level">
                    <label class="custom-label" for="level">New & Used Cars</label>
                  </div>
                  <div class="custom-lable-checkbox-radio">
                    <input type="radio" name="level" value="2" id="leve2">
                    <label class="custom-label" for="leve2">New Cars</label>
                  </div>
                  <div class="custom-lable-checkbox-radio">
                    <input type="radio" name="level" value="3" id="leve3">
                    <label class="custom-label" for="leve3">Used Cars</label>
                  </div>
                  <input class="btn btn-custom text-uppercase fa fa-search" id="name" type="submit" value="Search">
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-8">
          <!--Start show-cars section-->
          <section class="show-cars card" id="show-cars">
            <div class="text-center">
              <h3 class="text-capitalize l-r-border">filter  <span>resulte</span></h3>
              <div class="tabs">
                <ul class="list-unstyled tap-switch text-center text-uppercase">
                  <li class="wow zoomIn for-sell" role="presentation"><a class="selected">latest verticals on sell</a></li>
                  <li class="wow zoomIn for-rent" role="presentation"><a>latest verticals on rent</a></li>
                </ul>
              </div>
              <div class="cars-list">
                <div class="row">
                  <div class="col-md-4">
                    <div class="car-card text-center"><img class="img-responsive" src="../images/pexels-photo-981041.jpeg">
                      <div class="detail">
                        <p class="time">5 minute a go</p>
                        <h3 class="text-uppercase">car title name</h3><span class="price"><a>$35,50 </a></span><span class="kilo"><a>50,000 KM <i class="fa fa-home"></i></a></span>
                        <button class="btn btn-custom text-uppercase">read more <i class="fa fa-chevron-right"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="car-card text-center"><img class="img-responsive" src="../images/cool (338).jpg">
                      <div class="detail">
                        <p class="time">5 minute a go</p>
                        <h3 class="text-uppercase">car title name</h3><span class="price"><a>$35,50 </a></span><span class="kilo"><a>50,000 KM <i class="fa fa-home"></i></a></span>
                        <button class="btn btn-custom text-uppercase">read more <i class="fa fa-chevron-right"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="car-card text-center"><img class="img-responsive" src="../images/logos-background.jpg">
                      <div class="detail">
                        <p class="time">5 minute a go</p>
                        <h3 class="text-uppercase">car title name</h3><span class="price"><a>$35,50 </a></span><span class="kilo"><a>50,000 KM <i class="fa fa-home"></i></a></span>
                        <button class="btn btn-custom text-uppercase">read more <i class="fa fa-chevron-right"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="car-card text-center"><img class="img-responsive" src="../images/pexels-photo-981041.jpeg">
                      <div class="detail">
                        <p class="time">5 minute a go</p>
                        <h3 class="text-uppercase">car title name</h3><span class="price"><a>$35,50 </a></span><span class="kilo"><a>50,000 KM <i class="fa fa-home"></i></a></span>
                        <button class="btn btn-custom text-uppercase">read more <i class="fa fa-chevron-right"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="car-card text-center"><img class="img-responsive" src="../images/cool (338).jpg">
                      <div class="detail">
                        <p class="time">5 minute a go</p>
                        <h3 class="text-uppercase">car title name</h3><span class="price"><a>$35,50 </a></span><span class="kilo"><a>50,000 KM <i class="fa fa-home"></i></a></span>
                        <button class="btn btn-custom text-uppercase">read more <i class="fa fa-chevron-right"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="car-card text-center"><img class="img-responsive" src="../images/logos-background.jpg">
                      <div class="detail">
                        <p class="time">5 minute a go</p>
                        <h3 class="text-uppercase">car title name</h3><span class="price"><a>$35,50 </a></span><span class="kilo"><a>50,000 KM <i class="fa fa-home"></i></a></span>
                        <button class="btn btn-custom text-uppercase">read more <i class="fa fa-chevron-right"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
  <!-- End of start Page-->
@endsection