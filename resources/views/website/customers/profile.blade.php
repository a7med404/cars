
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
  <section class="profile" id="porfile">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="info"><img class="img-responsive thumbnail" src="../images/profile-image.jpg">
              <p class="center text-capitalize">ahmed ibrahim</p>
              <hr>
              <div class="row text-center">
                <div class="col-md-4">
                  <div class="data">
                    <p>12</p><span>cars</span>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="data have-border">
                    <p>12</p><span>cars</span>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="data">
                    <p>12</p><span>cars</span>
                  </div>
                </div>
              </div>
              <hr>
              <h3 class="text-capitalize">your information</h3>
              <ul class="list-unstyled">
                <li class="text-capitalize">full name: <span>ahmed ibrahim</span> </li>
                <li class="text-capitalize">phone: <span>+2499-282-64846</span> </li>
                <li class="text-capitalize">e-mail: <span>a7med_404@outlook.com</span> </li>
                <li class="text-capitalize">Dealer: <span>404 loamazien</span> </li>
              </ul><a>
                <button class="btn btn-custom text-uppercase">edit profile <i class="fa fa-chevron-right"></i></button></a>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <!--Start show-cars section-->
          <section class="show-cars card" id="show-cars">
            <div class="text-center">
              <h3 class="text-capitalize l-r-border">our most  <span>popular cars</span></h3>
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