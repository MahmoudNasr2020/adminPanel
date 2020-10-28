<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>


  <!-- logo -->
    <link rel="shortcut icon" href="{{ $style }}/dist/img/logo.png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{  $style }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{  $style }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{  $style }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{  $style }}/plugins/jqvmap/jqvmap.min.css">
  @php
      $local = App::getLocale();
  @endphp
  @if ($local =='en')
         <!-- Theme style -->
        <link rel="stylesheet" href="{{  $style }}/dist/css/adminlte.min.css">
  @else
        <!-- Theme style -->
        <link rel="stylesheet" href="{{  $style }}/dist/css/rtl/adminlte.min.css">
        <link rel="stylesheet" href="{{  $style }}/dist/css/rtl/custom.css">
  @endif

  <!-- two dir -->
  <link rel="stylesheet" href="{{ $style }}/dist/css/allDir.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{  $style }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{  $style }}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{  $style }}/plugins/summernote/summernote-bs4.min.css">
  @yield('style')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
