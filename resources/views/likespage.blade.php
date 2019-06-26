@extends('layouts.app')

@section('title', 'Likes page')

@section('content')
    @include('partials.header')

    <h3 class="container">
    	Here will show all your likes
	</h3>
  {{--   @if (count($userlikes) === 0)
        <div>
            <b>There are no likes maded</b>
            <p>Like a post:
                <button type="button" class="btn btn-light create_post">
                    <a href="{{ url('home') }}">
                        Like a post
                    </a>
                </button>
            </p>
        </div>
        @else --}}
        @foreach($uploads as $upload)
            <div class="col-md-8 left">
                <div class="card">
                    <div class="card-header">
                        {{ $upload['user']->name }}
                    </div>
                    <div class="card-body">
                        <div class="list-group-item post">
                            <img src="{{ $upload->image }}">
                            <br>
                            <br>
                            <p id="title"><b>Title</b>
                                <br>
                                <a href="{{ url('image/'.$upload['id'])}}">
                                    {{$upload->name}}
                                </a>
                            </p>
                            <p id="description">
                                <b>Description</b>
                                <br>
                                {{$upload->description}}
                            </p>
                            <p id="created_at">
                                <b>Posted at</b>
                                <br>
                                {{$upload->created_at->toDayDateTimeString()}}
                            </p>
                        </div>
                        <a href="{{ route('like', ['upload_id' => $upload->id]) }}" class="like btn btn-primary">
                            {{ (in_array($upload->id, $userLikes)) ? 'You like this post' : 'Like'}}
                        </a>
                    </div>
                </div>
                <br>
            </div>
        @endforeach
    {{-- @endif --}}
@endsection
