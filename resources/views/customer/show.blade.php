@extends('layouts.layout')

@section('title', 'Customer Details')
    
@section('content')
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Customer Details</h1>
      <div class="row">
          <div class="col-3">
              <a href="/customers/{{$customer->id}}/edit" class="btn btn-link btn-warning">Edit</a>
          </div>

          <form action="/customers/{{$customer->id}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-link btn-danger">Delete</button>
          </form>
      </div>

      <p class="lead">Name: <strong>{{$customer->name}}</strong></p>
      <p class="lead">Email: <strong>{{$customer->email}}</strong></p>
      <p class="lead">Company: <strong>{{$customer->company->name}}</strong></p>
      <p class="lead">Status: <strong>{{$customer->status}}</strong></p>
    </div>
  </div>
@endsection