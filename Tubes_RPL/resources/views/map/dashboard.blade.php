@extends('layout.main')

@section('content')
    @include('map.weather')
@endsection

@section('map_content') {{-- Unique section name --}}
    @include('map.map')
@endsection
