@extends('layout.main')

@section('content')
    @include('map.weather')
@endsection

@section('map_content')
    @include('map.map')
@endsection

@section('donasi')
    @include('map.donasi')
@endsection