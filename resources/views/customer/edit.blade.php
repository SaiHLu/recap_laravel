@extends('layouts.layout')

@section('title', 'Create Customer')
    
@section('content')
  <h1>Create New Customer</h1>
  <form action="/customers/{{$customer->id}}" method="POST">
    @method('PATCH')
    @include('customer.form')
    <button type="submit" class="btn btn-info">Update</button>
  </form>
@endsection