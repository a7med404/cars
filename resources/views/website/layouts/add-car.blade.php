<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link rel="icon" href="" type="image/ico">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/sweetalert.css">
    <link rel="stylesheet" href="../css/icheck-1.x/all.css">
    <link rel="stylesheet" href="../css/pgwslider.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="../css/ion.rangeSlider.skinFlat.css">
    <link rel="stylesheet" href="../css/dropzone.min.css">
    <link rel="stylesheet" href="../css/framework.css">
    <link rel="stylesheet" href="../css/framework-rtl.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/main-rtl.css">
    <title>App Name! || page title </title>
  </head>
  <body>
    <div class="start-page" role="main">
      <header id="header">
        <nav class="all-nav navbar-fixed-top">
          <div class="top-nav">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="top-start">
                    <ul class="list-unstyled">
                      <li class="text-uppercase">Sudan, Khartoum, 7TH ST <i class="fa fa-home"></i></li>
                      <li class="text-uppercase">+249-92826-4846 <i class="fa fa-phone"></i></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="top-end"> 
                    <ul class="list-unstyled">
                      <li class="text-uppercase"><a href="sing.html" title=""><i class="fa fa-logine">Sing in</i></a></li>
                      <li class="text-uppercase"><a href="sing.html" title=""><i class="fa fa-locke">Sing up</i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <nav class="navbar">
            <div class="container"> 
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#3t_nav" aria-expanded="false"><span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i></button><a class="smoothscroll navbar-brand text-uppercase" href="http://localhost/cars/dist/html/">Eng-shahab</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="3t_nav"> 
                <ul class="nav navbar-nav navbar-right text-uppercase">
                  <li class="nav-item dropdown" role="presentation"><a class="dropdown-toggle smoothscroll transition" href="javascript:;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">selknkl <i class="caret"></i></a>
                    <ul class="dropdown-menu" id="menu1" role="menu">
                      <li><a class="smoothscroll transition" href="">All cars</a></li>
                      <li><a class="smoothscroll transition" href="">Dealer cars</a></li>
                      <li><a class="smoothscroll transition" href="">Privete seller cars</a></li>
                      <li><a class="smoothscroll transition" href="">Last added cars</a></li>
                      <li><a>
                          <button class="btn btn-custom text-uppercase">all brands <i class="fa fa-home"></i></button></a></li>
                    </ul>
                  </li>
                  <li><a class="smoothscroll transition" href="#">Sale <i class="caret"></i></a></li>
                  <li><a class="smoothscroll transition" href="">Rent <i class="caret"></i></a></li>
                  <li><a class="smoothscroll transition hsg-nav__link-wrapper" href="#">Sell My Car <i class="caret"></i></a></li>
                  <li><a class="smoothscroll transition hsg-nav__link-wrapper" href="#services">services</a></li>
                  <li><a class="smoothscroll transition" href="#">More</a></li>
                  <li class="nav-item dropdown" role="presentation"><a class="dropdown-toggle smoothscroll transition" href="javascript:;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"><i class="caret"></i></i></a>
                    <ul class="dropdown-menu" id="menu1" role="menu">
                      <li><a class="dropdown-item">profile</a></li>
                      <li><a class="dropdown-item">Manage My Cars</a></li>
                      <li><a class="dropdown-item">logout<i class="fa fa-sign-out pull-right"></i></a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </nav>
      </header>
      <!-- Start Content section-->
      <section class="add-car" id="add-car">
        <div class="container">
          <div class="row"> 
            <div class="col-md-9">
              <div class="contect">
                <div class="card">
                  <h3 class="l-r-border text-uppercase"> Create new ads</h3><small>add ypur car to enjoying eith our services</small>
                  <hr>
                  <form class="form" action="/" method="post">
                    <div class="row"> 
                      <div class="col-md-12">
                        <div class="custom-input for-middel">
                          <input id="ads_title" name="ads title" type="text" autofocus><span class="border-middel"></span><span class="asterisx">*</span>
                          <label class="custom-label" for="ads_title">Ads Title</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="level col-md-6">
                        <div class="custom-select">
                          <select name="For Sale Rent">
                            <option value="0">For Sale Rent</option>
                            <option value="3">sell </option>
                            <option value="3">rent </option>
                          </select>
                        </div>
                      </div>
                      <div class="model col-md-6">
                        <div class="custom-select">
                          <select name="Brand" value="3">
                            <option value="0"> Select Brand</option>
                            <option value="0"> Audi </option>
                            <option value="0"> Land Rover </option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="level col-md-6">
                        <div class="custom-select">
                          <select name="For Sale Rent">
                            <option value="0">model</option>
                            <option value="3">sell </option>
                            <option value="3">rent </option>
                          </select>
                        </div>
                      </div>
                      <div class="model col-md-6">
                        <div class="custom-select">
                          <select name="level" value="3">
                            <option value="0"> Year</option>
                            <option value="0"> Audi </option>
                            <option value="0">Land Rover </option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="price"> 
                          <input type="text" name="price">
                        </div>
                        <hr>
                      </div>
                    </div>
                    <h3 class="text-capitalize">car information</h3>
                    <div class="form-section">
                      <div class="fuel-type"> 
                        <label class="custom-lable">Fuel Type</label>
                        <div class="form-group text-capitalize">
                          <div class="custom-lable-checkbox-radio">
                            <input id="petrol" name="fuel-type" type="radio">
                            <label class="custom-label" for="petrol">Petrol</label>
                          </div>
                          <div class="custom-lable-checkbox-radio">
                            <input id="diesel" name="fuel-type" type="radio">
                            <label class="custom-label" for="diesel">Diesel</label>
                          </div>
                          <div class="custom-lable-checkbox-radio">
                            <input id="CNG" name="fuel-type" type="radio">
                            <label class="custom-label" for="CNG">CNG</label>
                          </div>
                          <div class="custom-lable-checkbox-radio">
                            <input id="hybrid" name="fuel-type" type="radio">
                            <label class="custom-label" for="hybrid">Hybrid</label>
                          </div>
                        </div>
                      </div>
                      <div class="level"> 
                        <label class="custom-lable">Car level</label>
                        <div class="form-group text-capitalize"> 
                          <div class="custom-lable-checkbox-radio">
                            <input type="radio" name="level" value="2" id="leve2">
                            <label class="custom-label" for="leve2">New </label>
                          </div>
                          <div class="custom-lable-checkbox-radio">
                            <input type="radio" name="level" value="3" id="leve3">
                            <label class="custom-label" for="leve3">Used </label>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                    <div class="row">
                      <div class="level col-md-6">
                        <div class="custom-select">
                          <select name="For Sale Rent">
                            <option value="0">Transmission </option>
                            <option value="3">sell </option>
                            <option value="3">rent </option>
                          </select>
                        </div>
                      </div>
                      <div class="model col-md-6">
                        <div class="custom-select">
                          <select name="Brand" value="3">
                            <option value="0"> kilometers Driven</option>
                            <option value="0"> Audi </option>
                            <option value="0"> Land Rover</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row"> 
                      <div class="col-md-12">
                        <div class="custom-input for-middel">
                          <textarea id="ads_title" name="ads title"></textarea><span class="border-middel"></span>
                          <label class="custom-label" for="ads_title">Note</label>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="dropzone dz-clickable" id="add-car-form">
                      <div class="dz-message d-flex flex-column"><i class="fa fa-upload"> </i>
                        <p>Drop here or click to upload photos</p>
                      </div>
                    </div>
                    <input class="btn btn-custom text-uppercase fa fa-add" id="name" type="submit" value="Create">
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-3"></div>
          </div>
        </div>
      </section>
      <!-- End of start Page-->
      <!-- Start footer section-->
      <footer class="footer" id="footer">
        <div class="content">
          <div class="container">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="about-us">
                  <h4 class="l-r-border text-uppercase">about us</h4>
                  <p>with Us fine your dream car with Us fine your dream car with Us fine your dream car with Us fine your dream car.</p>
                  <div class="social-links">
                    <ul class="links list-unstyled">
                      <li><a><i class="fa fa-facebook"></i></a></li>
                      <li><a><i class="fa fa-google"></i></a></li>
                      <li><a><i class="fa fa-linkedin"></i></a></li>
                      <li><a><i class="fa fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="contact">
                  <h4 class="l-r-border text-uppercase">contact</h4>
                  <ul class="links list-unstyled">
                    <li>+249-2826-4846 <i class="fa fa-phone"></i></li>
                    <li>a7med_404@outlook.com <i class="fa fa-evanto"></i></li>
                    <li>Sudan, Khartoum, 7TH ST <i class="fa fa-maker"></i></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <h4 class="l-r-border text-uppercase">contact</h4>
              </div>
              <div class="col-md-3 col-sm-6">
                <h4 class="l-r-border text-uppercase">about us</h4>
              </div>
            </div>
          </div>
        </div>
        <!-- Start buttom footer section-->
        <div class="footer-buttom">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-12">
                <div class="copy-right text-capitalize">Copyright © 2018 All rights reserved</div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="design text-capitalize"> Designed By <a class="a7med404" href="a7med404.com">a7med404</a></div>
              </div>
            </div>
          </div>
        </div>
        <!-- End of start Page-->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.nicescroll.min.js"></script>
        <script src="../js/vue.min.js"></script>
        <script src="../js/moment.min.js"></script>
        <script src="../js/icheck.min.js"> </script>
        <script src="../js/pgwslider.min.js"></script>
        <script src="../js/sweetalert.min.js"></script>
        <script src="../js/jquery.smartWizard.js"></script>
        <script src="../js/ion.rangeSlider.min.js"> </script>
        <script src="../js/dropzone.min.js"></script>
        <script src="../js/wow.min.js"></script>
        <script src="../js/my-vue.js"></script>
        <script src="../js/frontend.js"></script>
      </footer>
    </div>
  </body>
</html>