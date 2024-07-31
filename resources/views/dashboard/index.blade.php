@extends('dashboard.layouts.main')

@section('container')

<h3 class="text-3xl font-bold dark:text-white">Welcome back, {{ auth()->user()->name }}</h3>

@endsection