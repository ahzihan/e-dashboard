@extends('layouts.app')

@section('side-bar')
    @include('components.Sidebar')
@endsection

@section('header')
    @include('components.Header')
@endsection

@section('content')
    @include('components.Dashboard')
@endsection

@section('footer')
    @include('components.Footer')
@endsection
