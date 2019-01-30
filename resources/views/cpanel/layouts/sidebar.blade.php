        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ url('/cpanel') }}" class="site_title"><i class="fa fa-tasks"> </i>  <span> Home </span></a>
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('admin/images/user.png') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>{{ __('home/sidebar.welcome') }}</span>
                <h2> {{ \Auth::user()->name }} </h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>{{ __('home/sidebar.app_settings') }}</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ url('cpanel') }}"><i class="fa fa-dashboard"></i> {{ __('home/sidebar.dashboard') }} <span class="fa fa-home"></span></a> </li>
                  <li><a><i class="fa fa-edit"></i> {{ __('home/sidebar.customers') }} <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('customers.index')   }}">{{ __('home/sidebar.all_customers')      }}</a></li>
                      <li><a href="{{ route('customers.create')  }}">{{ __('home/sidebar.add_customer')       }}</a></li>
                      {{-- <li><a href="{{ route('customers.repport') }}">{{ __('home/sidebar.customers_repports') }}</a></li> --}}
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>{{ __('home/sidebar.cars_setting') }}</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-car"></i> {{ __('home/sidebar.cars') }} <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('cars.index') }}">{{ __('home/sidebar.all_cars') }}</a></li>
                      <li><a href="{{ route('cars.sale') }}">{{ __('home/sidebar.for_sale') }}</a></li>
                      <li><a href="{{ route('cars.rent') }}">{{ __('home/sidebar.for_rent') }}</a></li>
                      <li><a href="{{ route('cars.create') }}">{{ __('home/sidebar.add_car') }}</a></li>
                      <li><a href="{{ route('cars.repport') }}">{{ __('home/sidebar.cars_repports') }}</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> {{ __('home/sidebar.features') }} <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('features.index') }}">{{ __('home/sidebar.all_features') }}</a></li>
                      <li><a href="{{ route('features.create') }}">{{ __('home/sidebar.add_feature') }}</a></li>
                      {{-- <li><a href="{{ route('features.repport') }}">{{ __('home/sidebar.features_repports') }}</a></li> --}}
                    </ul>
                  </li>
                  <li><a><i class="fa fa-gears"></i> {{ __('home/sidebar.engines') }} <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('engines.index') }}">{{ __('home/sidebar.all_engines') }}</a></li>
                      <li><a href="{{ route('engines.create') }}">{{ __('home/sidebar.add_engine') }}</a></li>
                      {{-- <li><a href="{{ route('engines.repport') }}">{{ __('home/sidebar.engines_repports') }}</a></li> --}}
                    </ul>
                  </li>
                  <li><a><i class="fa fa-tags"></i> {{ __('home/sidebar.brands') }} <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('brands.index') }}">{{ __('home/sidebar.all_brands') }}</a></li>
                      <li><a href="{{ route('brands.create') }}">{{ __('home/sidebar.add_brands') }}</a></li>
                      {{-- <li><a href="{{ route('brands.repport') }}">{{ __('home/sidebar.brands_repports') }}</a></li> --}}
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>{{ __('home/sidebar.site_settings') }}</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-sitemap"></i> {{ __('home/sidebar.admin_area') }} <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li>
                        <a><i class="fa fa-users"></i> {{ __('home/sidebar.users') }} <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="{{ route('users.index') }}">{{ __('home/sidebar.all_users') }}</a></li>
                          <li><a href="{{ route('users.create') }}">{{ __('home/sidebar.add_user') }}</a></li>
                        </ul>
                      </li>
                      <li>
                        <a><i class="fa fa-users"></i> {{ __('home/sidebar.roles') }} <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="{{ route('roles.index') }}">{{ __('home/sidebar.all_roles') }}</a></li>
                          <li><a href="{{ route('roles.create') }}">{{ __('home/sidebar.add_role') }}</a></li>
                        </ul>
                      </li>
                      <li>
                        <a><i class="fa fa-users"></i> {{ __('home/sidebar.permissions') }} <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="{{ route('permissions.index') }}">{{ __({{ route('admin.logout') }}'home/sidebar.all_permissions') }}</a></li>
                          <li><a href="{{ route('permissions.create') }}">{{ __('home/sidebar.add_permission') }}</a></li>
                        </ul>
                      </li>
                      {{-- <li><a href="#level1_2"> One</a></li> --}}
                    </ul>
                    <li><a href="{{ route('site-setting') }}"><i class="fa fa-edit"></i> {{ __('home/sidebar.site_settings') }}</a></li>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              @if(auth()->user()->hasRole('superadministrator'))
              <a data-toggle="tooltip" data-placement="top" title="Settings" href="{{ route('site-setting') }}">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('admin.logout') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
              @endif
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
