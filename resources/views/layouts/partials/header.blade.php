<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="description" content="Sol Pieles SRL">
        <meta name="author" content="Yismen Jorge">
        <meta name="csrf_token" content="{{ csrf_token() }}">
        
        <title>SOL Pieles, SRL | Admin Site</title>
        <!-- Bootstrap 3.3.5 -->

        <!-- Sit Favicon -->
        <link rel="shortcut icon" href="{{ asset('images/solpieles.ico') }}">
    

        {{-- <link rel="stylesheet" href="{{ asset('../node_modules/bootstrap/dist/css/bootstrap.min.css') }}"> --}}
        <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/admin-lte/dist/css/AdminLTE.min.css') }}">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/admin-lte/dist/css/skins/_all-skins.min.css') }}">
        {{-- My custom css --}}
        <link rel="stylesheet" href="{{ asset('assets/css/my-style.css') }}">
    </head>
  <body class="hold-transition skin-green sidebar-mini sidebar-collapse">
    