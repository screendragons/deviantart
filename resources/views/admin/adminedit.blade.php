@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @include('partials.header')

    <form action="{{url('/user/'.$user['id'])}}{{-- {{ route('users.update',[$user->id]) }} --}}" method="POST">
    	@csrf
    	@method('PUT')
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$user->name}}" name="name">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">E-mail</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" value="{{$user->email}}" name="email">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
