<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="Creative, Dashboard, website, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="icon" href="{{ asset('website/images/visa.png') }}" type="image/ico" />

    <title>App name! || @yield('title') </title>

    <!-- Bootstrap -->
    {!! Html::style(asset('website/css/bootstrap.min.css')) !!}
    {!! Html::style(asset('website/css/bootstrap-rtl.min.css')) !!}
    <!-- Font Awesome -->
    {!! Html::style(asset('website/css/font-awesome.min.css')) !!}
    {!! Html::style(asset('website/css/fontawesome.min.css')) !!}
    <!--  icheck -->
    {!! Html::style(asset('website/css/icheck-1.x/all.css')) !!}
    <!--  pgwslider -->
    {!! Html::style(asset('website/css/pgwslider.min.css')) !!}
    <!--  ion.rangeSlider -->
    {!! Html::style(asset('website/css/ion.rangeSlider.min.css')) !!}
    {!! Html::style(asset('website/css/ion.rangeSlider.skinFlat.css')) !!}
    <!--  dropzone -->
    {!! Html::style(asset('website/css/dropzone.min.css')) !!}
    <!--  sweetalert -->
    {!! Html::style(asset('website/css/sweetalert.css')) !!}
    @yield('header')
    <!-- Custom Theme Style -->
    {!! Html::style(asset('website/css/framework.css')) !!}
    {!! Html::style(asset('website/css/framework-rtl.css')) !!}
    {!! Html::style(asset('website/css/main.css')) !!}
    {!! Html::style(asset('website/css/main-rtl.css')) !!}
    <!-- Custom RTL Theme Style -->
    {{-- {!! Html::style(asset('website/css/style-rtl.css')) !!} --}}

  </head>
