@extends('layouts.layout')

@section('title', 'Customer Lists')

@section('content')
  <h1 class="text-center mb-3">Customer Lists</h1>
  <ul class="list-group">
      <div class="row">
          <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Name</th>
                  <th scope="col">Company</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach($customers as $customer)
                  <tr>
                    <th>{{$customer->id}}</th>
                    <td><a href="/customers/{{ $customer->id }}">{{$customer->name}}</a></td>
                    <td>{{$customer->company->name}}</td>
                    <td>{{$customer->status}}</td>
                  </tr>
                @endforeach
                
              </tbody>
            </table>
      </div>
  </ul>
@endsection