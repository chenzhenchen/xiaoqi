@extends('home.layout.layout')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/home/home_page/chosen.css')}}?v={{time()}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/home/home_page/font-awesome.css')}}?v={{time()}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/home/home_page/public.css')}}?v={{time()}}">
    <link rel="stylesheet"type="text/css" href="{{asset('css/home/home_page/slick.css')}}?v={{time()}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/home/home_page/screen.css')}}?v={{time()}}">
@endsection

@section('contents')
    adsfdasfdas
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('js/home/home_page/chosen.jquery.js')}}?v={{time()}}"></script>
    <script type="text/javascript" src="{{asset('js/home/home_page/easyXDM-2.4.19.3.min.js')}}?v={{time()}}"></script>
    <script type="text/javascript" src="{{asset('js/home/home_page/init.js')}}?v={{time()}}"></script>
    <script type="text/javascript" src="{{asset('js/home/home_page/piwik.js')}}?v={{time()}}"></script>
    <script type="text/javascript" src="{{asset('js/home/home_page/public.js')}}?v={{time()}}"></script>
    <script type="text/javascript" src="{{asset('js/home/home_page/slick.min.js')}}?v={{time()}}"></script>
@endsection