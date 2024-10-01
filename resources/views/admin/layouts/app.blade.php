<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="height: auto;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    {{-- <link rel="stylesheet" href="{{ mix('/scss/admin/app.scss') }}"> --}}
    <link rel="stylesheet" href="{{ asset('/assets/admin/css/app.css') }}">
    <style>
        .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active, .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active{
            /*background: #0d6efd !important;*/
        }
        .table-striped tbody tr:nth-of-type(odd){
            background: white;
        }
        tbody tr:hover{
            background: #CAE1FC !important;
        }
    </style>
</head>
<body class="sidebar-mini" style="height: auto;">
<script src="{{ asset('/assets/admin/js/ckeditor4/ckeditor.js') }}"></script>
<script src="{{ asset('/assets/admin/js/main.js') }}"></script>
<div class="wrapper" style="background: #fff;">
    @include('admin.layouts.header')

    @include('admin.layouts.left')
    <div class="content-wrapper" style="min-height: 675px; background: #fff;">
        <div class="content" style="background: #fff;">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
    <aside class="control-sidebar control-sidebar-dark" style="display: none;">
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <footer class="main-footer">
        <div class="float-right d-none d-sm-inline">
            Слава Україні 🇺🇦
        </div>
        <strong>Copyright © {{ date('Y') }} VIIBES Study | </strong> All rights reserved.
    </footer>
    <div id="sidebar-overlay"></div>
</div>
@yield('js')
</body></html>
