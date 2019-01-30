
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
  <section class="car-details" id="car-details">
    <div class="container">
      <div class="card">
        <div class="details">
          <div class="row">
            <div class="col-md-8">
              <ul class="pgwSlider">
                <li><img class="img-responsive" src="../images/auto-racing-automobiles-automotive-39855.jpg" alt="" data-description=""></li><span class="status text-uppercase">new</span>
                <li><img class="img-responsive" src="../images/cool (338).jpg" alt="" data-description=""></li>
                <li><img class="img-responsive" src="../images/cool (338).jpg" alt="" data-description=""></li>
                <li><img class="img-responsive" src="../images/auto-racing-automobiles-automotive-39855.jpg"></li>
              </ul>
            </div>
            <div class="col-md-4">
              <div class="data-more">
                <p class="text-uppercase">for sale</p>
                <h3 class="text-capitalize">car title name  <small class="fa fa-clock">4 minutes ago</small></h3>
                <p>6cyl 3.0L Turbo Petrol <i class="fa fa-home"></i></p>
                <p>49,909 km <i class="fa fa-tachometer"></i></p><span class="price">$125,888</span>
                <p class="text-capitalize">color: <span class="badge badge-pill badge-success">gary</span></p>
                <ul class="more list-unstyled"> 
                  <li><a class="fa fa-taxi"> Sedan </a></li>
                  <li><a class="fa fa-calendar-check"> 2013 </a></li>
                  <li><a class="fa fa-check"> manual  </a></li>
                  <li><a class="fa fa-gas-pump"> petrole   </a></li>
                </ul><a>
                  <button class="btn btn-custom text-uppercase" type="button" data-toggle="modal" data-target="#myModal">contact owner <i class="fa fa-phone"></i></button></a>
                <div class="modal fade" id="myModal">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3 class="modal-title l-r-border text-uppercase"> Content owner</h3>
                        <button class="close" type="button" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body"> <small>sing in to enjoying eith our services</small>
                        <form class="form" action="" method="post">
                          <div class="row"> 
                            <div class="col-md-6">
                              <div class="custom-input for-middel">
                                <input id="first_name" name="first_name" type="text"><span class="border-middel"></span>
                                <label class="custom-label" for="first_name">first name</label>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="custom-input for-middel">
                                <input id="last_name" name="last_name" type="text"><span class="border-middel"></span>
                                <label class="custom-label" for="last_name">last name</label>
                              </div>
                            </div>
                          </div>
                          <div class="custom-input for-middel">
                            <input id="phone_number" name="phone_number" type="text" autofocus><span class="border-middel"></span>
                            <label class="custom-label" for="phone_number">phone number</label>
                          </div>
                          <div class="custom-input for-middel">
                            <input id="email" name="email" type="email"><span class="border-middel"></span>
                            <label class="custom-label" for="email">email</label>
                          </div>
                          <div class="custom-input for-middel">
                            <textarea id="name" name="name"></textarea><span class="border-middel"></span>
                            <label class="custom-label" for="name">Name</label>
                          </div>
                          <input class="btn btn-custom text-uppercase fa fa-home" id="name" type="submit" value="Sing up">
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button class="close" type="button" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="overview">
          <h3 class="text-capitalize l-r-border">overview</h3>
          <div class="tabs">
            <ul class="nav nav-pills mb-3 text-center text-uppercase" id="pills-tab" role="tablist">
              <li class="nav-item active"><a class="nav-link" id="pills-details-tab" data-toggle="pill" href="#pills-details" role="tab" aria-controls="pills-details" aria-selected="true">Details</a></li>
              <li class="nav-item"><a class="nav-link" id="pills-features-tab" data-toggle="pill" href="#pills-features" role="tab" aria-controls="pills-features" aria-selected="true">Features</a></li>
              <li class="nav-item"><a class="nav-link" id="pills-specifications-tab" data-toggle="pill" href="#pills-specifications" role="tab" aria-controls="pills-specifications" aria-selected="true">Specifications</a></li>
            </ul>
            <div class="tab-content sections-contents" id="pills-tabContent">
              <div class="tab-pane fade active in" id="pills-details" role="tabpanel" aria-labelledby="pills-details-tab"> 
                <div class="details text-capitalize">
                  <div class="details-item"> 
                    <div class="details-item-name"><span>Vehicle</span></div>
                    <div class="details-item-value">V222 Sedan L 4dr 7G-TRONIC + 7sp 3.0TT [Jul] </div>
                  </div>
                  <div class="details-item"> 
                    <div class="details-item-name"><span>price</span></div>
                    <div class="details-item-value">$125,888</div>
                  </div>
                  <div class="details-item"> 
                    <div class="details-item-name"><span>Kilometers</span></div>
                    <div class="details-item-value">49,909 km </div>
                  </div>
                  <div class="details-item"> 
                    <div class="details-item-name"><span>Colour</span></div>
                    <div class="details-item-value">Silver </div>
                  </div>
                  <div class="details-item"> 
                    <div class="details-item-name"><span>Transmission</span></div>
                    <div class="details-item-value">7 speed Sports Automatic</div>
                  </div>
                  <div class="details-item"> 
                    <div class="details-item-name"><span>Body</span></div>
                    <div class="details-item-value">4 doors 5 seat Sedan </div>
                  </div>
                  <div class="details-item"> 
                    <div class="details-item-name"><span>Engine</span></div>
                    <div class="details-item-value">6 cylinder Petrol Twin Turbo Intercooled 3.0L </div>
                  </div>
                  <div class="details-item"> 
                    <div class="details-item-name"><span>Fuel Consumption Combined </span></div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-features" role="tabpanel" aria-labelledby="pills-features-tab">Features</div>
              <div class="tab-pane fade" id="pills-specifications" role="tabpanel" aria-labelledby="pills-specifications-tab">Specifications</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of start Page-->
@endsection