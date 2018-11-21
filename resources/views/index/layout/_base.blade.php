<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', '默认标题')-BBS</title>
    <link href="{{asset('/css/app.css')}}" rel="stylesheet">
</head>
<body id="app">
@include('index.layout._header')
<div class="container">
    @section('body')
        @show
</div>
@include('index.layout._footer')
<script src="{{asset('/js/app.js')}}"></script>
</body>
</html>