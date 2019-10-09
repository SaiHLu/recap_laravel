@extends('layouts.layout')

@section('title', 'Company Lists')

@section('content')
  <h1 class="text-center">Company Lists</h1>
  <ul class="list-group">
      <div class="row">
          <div class="col-6 offset-3">
              @foreach($companies as $company)
                <li class="list-group-item">{{$company->name}} <span class="text-muted">({{$company->phone}})</span></li>
              @endforeach
          </div>
      </div>
  </ul>
@endsection