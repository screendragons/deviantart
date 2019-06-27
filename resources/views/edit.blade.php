@extends('layouts.app')

@section('title', 'Home')

@section('content')
  @include('partials.header')

  <form action="{{url('/image/'.$upload['id'])}}" method="POST">
  	@csrf
  	@method('PUT')
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$upload->name}}" name="title">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Description</label>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" value="{{$upload->description}}" name="description">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
