
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
              <li class="text-uppercase"><a href="{{ route('sing')  }}" title=""><i class="fa fa-logine">Sing in</i></a></li>
              <li class="text-uppercase"><a href="{{ route('sing')  }}" title=""><i class="fa fa-locke">Sing up</i></a></li>
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
        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#3t_nav" aria-expanded="false"><span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i></button><a class="smoothscroll navbar-brand text-uppercase" href="{{ route('website') }}">Eng-shahab</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="3t_nav"> 
        <ul class="nav navbar-nav navbar-right text-uppercase">
          <li class="nav-item dropdown" role="presentation"><a class="dropdown-toggle smoothscroll transition" href="javascript:;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">sall <i class="caret"></i></a>
            <ul class="dropdown-menu" id="menu1" role="menu">
              <li><a class="smoothscroll transition" href="{{ route('cars.index') }}">All cars</a></li>
              <li><a class="smoothscroll transition" href="{{ route('cars.index') }}">Dealer cars</a></li>
              <li><a class="smoothscroll transition" href="{{ route('cars.index') }}">Privete seller cars</a></li>
              <li><a class="smoothscroll transition" href="{{ route('cars.index') }}">Last added cars</a></li>
              <li><a>
                  <button class="btn btn-custom text-uppercase">all brands <i class="fa fa-home"></i></button></a></li>
            </ul>
          </li>
          {{-- <li><a class="smoothscroll transition" href="#">Sale <i class="caret"></i></a></li> --}}
          <li><a class="smoothscroll transition" href="">Rent <i class="caret"></i></a></li>
          <li><a class="smoothscroll transition hsg-nav__link-wrapper" href="#">Sell My Car <i class="caret"></i></a></li>
          <li><a class="smoothscroll transition hsg-nav__link-wrapper" href="#services">services</a></li>
          <li><a class="smoothscroll transition" href="#">More</a></li>
          <li class="nav-item dropdown" role="presentation"><a class="dropdown-toggle smoothscroll transition" href="javascript:;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"><i class="caret"></i></i></a>
            <ul class="dropdown-menu" id="menu1" role="menu">
              <li><a class="dropdown-item" href="{{ route('profile',  ['id' => \Auth::user()->id]) }}">profile</a></li>
              <li><a class="dropdown-item">Manage My Cars</a></li>
              <li><a class="dropdown-item" href="{{ route('admin.logout') }}">logout<i class="fa fa-sign-out pull-right"></i></a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</nav>