@extends('layouts.backend-dashboard.app')
@section('title','Dashboard')
@section('breadcrumb','Dashboard')
@section('content')
  @include('Dashboard.html')
@endsection
@section('extra_javascript')
  @include('Dashboard.javascript')
@endsection