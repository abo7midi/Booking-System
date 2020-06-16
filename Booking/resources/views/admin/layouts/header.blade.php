<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ !empty($title)?$title:trans('admin.adminPanel') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('/design/AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{url('/design/AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{url('/design/AdminLTE/dist/csstempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{url('/design/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{url('/design/AdminLTE/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('/design/AdminLTE/dist/css/adminlte.min.css')}}">
    @if(direction()=='rtl')

            <!-- AdminLTE Skins. Choose a skin from the css/skins
                 folder instead of downloading all of them to reduce the load. -->
            <link rel="stylesheet" href="{{url('/design/AdminLTE/dist/css/rtl/skins/_all-skins.min.css')}}">
        <link rel="stylesheet" href="{{url('/design/AdminLTE/dist/css/rtl/AdminLTE.css')}}">
        <link rel="stylesheet" href="{{url('/design/AdminLTE/dist/css/rtl/AdminLTE.min.css')}}">
        <link rel="stylesheet" href="{{url('/design/AdminLTE/dist/css/rtl/bootstrap-rtl.min.css')}}">
        <link rel="stylesheet" href="{{url('/design/AdminLTE/dist/css/rtl/rtl.css')}}">
        <link rel="stylesheet" href="{{url('/design/AdminLTE/dist/fonts/fonts-fa.css')}}">
     @endif

    <link rel="stylesheet" href="{{url('/design/AdminLTE/dist/css/bookingStyle.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{url('/design/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{url('/design/AdminLTE/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{url('/design/AdminLTE/plugins/summernote/summernote-bs4.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{url('design/AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('design/AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">




</head>
