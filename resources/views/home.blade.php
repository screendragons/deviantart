@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">User</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}

                    @foreach($images as $image)

                        <div class="list-group-item col-xs-6 col-md-4 col-lg-3">
                            <h1 id="title">{{$images->name}}</h1>
                            <h1 id="description">{{$images->description}}</h1>
                            <h1 id="created_at">Posted<br>{{$images->created_at}}</h1>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
``
