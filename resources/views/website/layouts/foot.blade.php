

    <!-- jQuery -->
    {!! Html::script(asset('website/js/jquery.min.js')) !!}
    <!-- jquery-ui.min.js -->
    {{-- {!! Html::script(asset('website/js/jquery-ui.min.js')) !!} --}}
    <!-- Bootstrap -->
    {!! Html::script(asset('website/js/bootstrap.min.js')) !!}
    <!-- nicescroll -->
    {!! Html::script(asset('website/js/jquery.nicescroll.min.js')) !!}
    <!-- Validate JavaScript -->
    {{-- {!! Html::script(asset('website/js/validate.min.js')) !!} --}}
    <!-- Toaster JavaScript -->
    {!! Html::script(asset('website/js/toastr.min.js')) !!}
    <!-- vue JavaScript -->
    {!! Html::script(asset('website/js/vue.min.js')) !!}
    <!-- moment JavaScript -->
    {!! Html::script(asset('website/js/moment.min.js')) !!}
    <!-- icheck JavaScript -->
    {!! Html::script(asset('website/js/icheck.min.js')) !!}
    <!-- pgwslider JavaScript -->
    {!! Html::script(asset('website/js/pgwslider.min.js')) !!}
    <!-- jquery.smartWizard JavaScript -->
    {{-- {!! Html::script(asset('website/js/jquery.smartWizard.min.js')) !!} --}}
    <!-- ion.rangeSlider JavaScript -->
    {!! Html::script(asset('website/js/ion.rangeSlider.min.js')) !!}
    <!-- dropzone JavaScript -->
    {!! Html::script(asset('website/js/dropzone.min.js')) !!}
    <!-- wow JavaScript -->
    {!! Html::script(asset('website/js/wow.min.js')) !!}
    <!-- sweetalert JavaScript -->
    {!! Html::script(asset('website/js/sweetalert.min.js')) !!}
    <!-- CharJs -->
    {!! Html::script(asset('website/js/Chart.min.js')) !!}

    <!-- echarts.min.js -->
    {!! Html::script(asset('website/js/echart/echarts.min.js')) !!}
    <!-- world.js echarts -->
    {!! Html::script(asset('website/js/echart/world.js')) !!}

    @yield('footer')
      <script>
        toastr.options = {
          "closeButton": true,
          "debug": false,
          "newestOnTop": true,
          "progressBar": true,
          "positionClass": "toast-top-right",
          "preventDuplicates": true,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
      </script>
    @include('website.layouts.toastr')
    @include('website.layouts.errors')

    <!-- Custom Theme Scripts -->
    {!! Html::script(asset('website/js/frontend.js')) !!}
