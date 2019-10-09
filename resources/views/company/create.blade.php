@extends('layouts.layout')

@section('title', 'Create Customer')
    
@section('content')
  <h1>Create New Company</h1>
  <form action="/companies" method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Company Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Company Name" value="{{ old('name') }}">
      @error('name')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    <div class="form-group">
      <label for="phone">Company Phone</label>
      <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Company Phone" value="{{ old('phone') }}">
      @error('phone')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
@endsection