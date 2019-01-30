@include('website.layouts.head')
@include('website.layouts.body-start')
@include('website.layouts.page-start')

@yield('content')
{{--  @include('website.layouts.page-content')  --}}

@include('website.layouts.page-end')
@include('website.layouts.footer')
@include('website.layouts.foot')
@include('website.layouts.body-end')
