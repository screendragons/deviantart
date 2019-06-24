@extends('layouts.app')

@section('title', 'Likes page')

@section('content')
    @include('partials.header')

    <h3 class="container">
    	Here will show all your likes
	</h3>
   {{--  @if (count($userlikes) === 0)
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
        @else
        show liked posts
    @endif --}}
@endsection
