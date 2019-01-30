@include('cpanel.layouts.head')
@include('cpanel.layouts.body-start')
@include('cpanel.layouts.page-start')
 <!-- page content -->
 <div class="container" role="main">
    <div class="">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <form method="POST" class="login-form" action="{{ route('password.email') }}">
            @csrf
            <div class="login-wrap">
                <p class="login-img"><i class="fa fa-send"></i></p>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"  name="email" placeholder="{{ __('E-Mail Address') }}" autofocus>
                </div>
                <button class="btn btn-info btn-lg btn-block" type="submit">{{ __('Send Password Reset Link') }}</button>
            </div>
          </form>
          <!-- End Breadcrumb -->
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->
@include('cpanel.layouts.page-end')
@include('cpanel.layouts.foot')
@include('cpanel.layouts.body-end')
