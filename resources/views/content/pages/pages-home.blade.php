@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')
<h4>Home Page</h4>

@role('user')
<p>role: user</p>
@endrole

@role('admin')
<p>role: admin</p>
@endrole

@role('super-admin')
<p>role: super-admin</p>
@endrole

@endsection
