@include('cpanel.layouts.head')
@include('cpanel.layouts.body-start')
@include('cpanel.layouts.page-start')
@include('cpanel.layouts.sidebar')
@include('cpanel.layouts.top-navigation')
@include('cpanel.layouts.page-content-start')

@yield('content')
{{--  @include('cpanel.layouts.page-content')  --}}

@include('cpanel.layouts.page-content-end')
@include('cpanel.layouts.page-end')
@include('cpanel.layouts.footer')
@include('cpanel.layouts.foot')
@include('cpanel.layouts.body-end')
