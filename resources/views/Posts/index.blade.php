@extends('layouts.backend-dashboard.app')
@section('title','Posts')
@section('breadcrumb','Posts')
@section('content')
  @include('Posts.html')
@endsection
@section('extra_javascript')
  @include('Posts.javascript')
@endsection