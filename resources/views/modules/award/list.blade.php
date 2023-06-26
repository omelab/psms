@extends('layouts.master')

@section('title', 'Dashboard') 

@section('content')
  <h1 style="margin-top:50px; display:block; color:#fff; padding-left:20px;">Welcome To Dashboard</h1>
@stop

<!-- vendor plugins -->
@push('child-scripts')
  <script src="{{asset('assets/js/plugins/chartjs.min.js')}}" async></script>
@endpush