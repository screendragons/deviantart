@extends('layouts.app')

@section('title', 'Upload creations just right here')

@section('content')

    @include('partials.header')

    <div class="container">
        {{-- @if($errors->any())

            Validatie error
        @endif --}}

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

              <button type="submit" class="btn btn-info"> Save </button>

            @csrf
        </form>
    </div>
@stop



{{-- <!DOCTYPE html>

<html>

<head>

    <title>Laravel 5.7 image upload example - HDTuto.com</title>

    <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.css">

</head>
<body>
<div class="container">
    <div class="panel panel-primary">
      <div class="panel-heading"><h2>Laravel 5.7 image upload example - HDTuto.com</h2></div>
      <div class="panel-body">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        <img src="images/{{ Session::get('image') }}">
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('imageupload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
            </div>
        </form>
      </div>
    </div>
</div> --}}

