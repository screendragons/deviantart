@extends('layouts.app')

@section('title', 'Upload creations just right here')

@section('content')

  @include('partials.header')

    <div class="container">

      @include('inc.messages')

      <form action="{{ route('image.store') }}" enctype="multipart/form-data" method="post">

        <h3 class="jumbotron" id="margin">Upload here your creation!</h3>

        <div class="form-group">
          <label for="exampleInputTitle">Title *</label>
          <div class="inputholder"></div>
          <input type="text" name="title" class="form-control" id="exampleInputTitle" placeholder="Enter here your title">
          <small id="emailHelp" class="form-text text-muted">Just so we and other people know what kind of image it is :)</small>
        </div>

        <div class="form-group">
          <label for="exampleInputDescription">Description *</label>
          <input type="text" name="body" class="form-control" id="exampleInputDescription" placeholder="Description">
        </div>

        <input type="file" name="file">
        <br>
        <br>
        <div>
          <button type="submit" class="btn btn-outline-info"> Save </button>
        </div>

        @csrf
      </form>
    </div>
@stop
