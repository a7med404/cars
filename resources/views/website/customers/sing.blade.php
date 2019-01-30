
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
  <section class="sing" id="sing">
    <div class="container">
      <div class="contect">
        <div class="singup">
          <div class="row">
            <div class="col-md-5">
              <div class="ads">
                <div class="layout"><img class="img-responsive" src="../images/writer.svg">
                  <p class="text-capitalize">Welcome.</p>
                  <p class="text-capitalize">this is your best place to fine your dream car.</p>
                  <button class="btn btn-custom text-uppercase fa fa-sign-in change-sing">sing in</button>
                </div>
              </div>
            </div>
            <div class="col-md-7"> 
              <div class="start-form text-capitalize">
                <h3 class="l-r-border text-uppercase"> sing in</h3><small>sing in to enjoying eith our services</small>
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
                    <input id="password" name="password" type="password"><span class="border-middel"></span>
                    <label class="custom-label" for="password">password</label>
                  </div>
                  <div class="form-group text-uppercase remember">
                    <input id="remember" name="remember" type="checkbox">
                    <label for="remember">dealer.</label>
                  </div>
                  <div class="custom-input for-middel">
                    <input id="name" name="name" type="text"><span class="border-middel"></span>
                    <label class="custom-label" for="name">Name</label>
                  </div>
                  <input class="btn btn-custom text-uppercase fa fa-sign-up" id="name" type="submit" value="Sing up">
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="singin">
          <div class="row">
            <div class="col-md-5">
              <div class="ads">
                <div class="layout"><img class="img-responsive" src="../images/writer.svg">
                  <p class="text-capitalize">Welcome.</p>
                  <p class="text-capitalize">this is your best place to fine your dream car.</p>
                  <button class="btn btn-custom text-uppercase fa fa-sign-up change-sing">sing up</button>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <div class="start-form text-capitalize">
                <h3 class="l-r-border text-uppercase"> sing in</h3><small>sing in to enjoying eith our services</small>
                <form class="form" action="" method="post"> 
                  <div class="row"></div>
                  <div class="custom-input for-middel">
                    <input id="phone_number" name="phone_number" type="text" autofocus><span class="border-middel"></span>
                    <label class="custom-label" for="phone_number">phone number</label>
                  </div>
                  <div class="custom-input for-middel">
                    <input id="password" name="password" type="password"><span class="border-middel"></span>
                    <label class="custom-label" for="password">password</label>
                  </div>
                  <div class="form-group text-uppercase remember">
                    <input id="remember" name="remember" type="checkbox">
                    <label for="remember">remember me.</label>
                  </div>
                  <input class="btn btn-custom text-uppercase fa fa-sign-in" id="name" type="submit" value="Sing in">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of start Page-->
@endsection