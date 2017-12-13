<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/morris/morris.css') }}">
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/css/core.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/css/components.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/css/icons.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/css/pages.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/css/menu.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/css/responsive.css') }}" rel="stylesheet" type="text/css"/>
    <script src="{{ asset('admin/js/modernizr.min.js') }}"></script>
</head>
</html>
