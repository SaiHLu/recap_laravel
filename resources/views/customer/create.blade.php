@extends('layouts.layout')

@section('title', 'Create Customer')
    
@section('content')
  <h1>Create New Customer</h1>
  <form action="/customers" method="POST">
    @include('customer.form')
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
@endsection