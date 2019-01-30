@extends('cpanel.layouts.layout')
@section('title')
  Edit car Information
@endsection
@section('header')
    <!-- icheck -->
    {!! Html::style(asset('admin/css/icheck-1.x/all.css')) !!}
    <!-- daterangepicker -->
    {!! Html::style(asset('admin/css/daterangepicker.css')) !!}
    <!--  Ion.RangeSlider -->
    {!! Html::style(asset('admin/css/ion.rangeSlider.css')) !!}
    {!! Html::style(asset('admin/css/ion.rangeSlider.skinFlat.css')) !!}
    <!--  dropzone -->
    {!! Html::style(asset('admin/css/dropzone.min.css')) !!}
@endsection

@section('content')
    <!-- Start  Breadcrumb -->
    <div class="row">
        <div class="col-lg-12  float-right">
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="{{ url('\cpanel') }}">HOME</a></li>
                <li><i class="fa fa-users"></i><a href="{{ url('\cpanel\cars') }}">All cars</a></li>						  	
                <li><i class="fa fa-user"></i>Edit car Information</li>						  	
            </ol>
        </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
    <!-- End  Breadcrumb -->
    
    {!! Form::model($carInfo, ['route' => ['cars.update', $carInfo->id], 'method' => "PATCH", 'class' => 'form', 'files' => true]) !!}
    @include('cpanel.cars.form')
    {!! Form::close() !!}

@endsection
    
@section('footer')
    <!-- icheck -->
    {!! Html::script(asset('admin/js/icheck.min.js')) !!}
    <!-- moment -->
    {!! Html::script(asset('admin/js/moment.min.js')) !!}
    <!-- daterangepicker -->
    {!! Html::script(asset('admin/js/daterangepicker.js')) !!}
    <!--  Ion.RangeSlider  -->
    {!! Html::script(asset('admin/js/ion.rangeSlider.min.js')) !!}
    <!--  dropzone  -->
    {!! Html::script(asset('admin/js/dropzone.min.js')) !!}
    <!-- jquery.smartWizard.js-->
    {!! Html::script(asset('admin/js/jquery/jquery.smartWizard.js')) !!}
    <script>
        $(document).ready(function() {
            /* 
                For iCheck =====================================>
            */
            $("input").iCheck({
                checkboxClass:"icheckbox_square-yellow",
                radioClass:"iradio_square-yellow",
                increaseArea:"20%" // optional
            });
        });

        $('input[name="dateTime"]').daterangepicker({
            timePicker:true,
            autoApply: true,
            opens: "center",
            timePickerIncrement:15,
            timePicker24Hour: true,
            locale:{format:"YYYY-MM-DD hh:mm"},
            minDate: "{{ date('YYYY-MM-DD hh:mm') }}",
        });
        $('input[name="price"]').ionRangeSlider({
            grid: true,
            min: 1000,
            max: 10000000,
            from: 200,
            to: 800,
            step: 500,
            prefix: " SD "
        });
	   
        


        	   /* SMART WIZARD */
		
		function init_SmartWizard() {
			
			if( typeof ($.fn.smartWizard) === 'undefined'){ return; }
			console.log('init_SmartWizard');
			
			$('#wizard').smartWizard();

			$('#wizard_verticle').smartWizard({
			  transitionEffect: 'slide'
			});

			$('.buttonNext').addClass('btn btn-success');
			$('.buttonPrevious').addClass('btn btn-primary');
			$('.buttonFinish').addClass('btn btn-default');
			
		};
       
        
        $(document).ready(function() {
		    init_SmartWizard();
        });
        

    </script>
@endsection

