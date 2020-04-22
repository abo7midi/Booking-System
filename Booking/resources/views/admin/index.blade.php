<!DOCTYPE html>
<html>
@include('admin.layouts.header')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
@include('admin.layouts.navbar')


        <!-- Main content -->
        <section class="content">
            @include('admin.layouts.message')
            @yield('content');
        </section>
        <!-- /.content -->


@include('admin.layouts.footer')
