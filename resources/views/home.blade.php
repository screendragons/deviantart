@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @include('partials.header')
       {{--  @include('show') --}}
        <div class="container">
            <div class="row justify-content-center">

                <!-- Search form -->
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                <br>
                <br>
                <br>

                <div class="paginate">
                    {!! $uploads->links() !!}
                </div>

               {{--  Als er geen post zijn gemaakt --}}
                @if (count($uploads) === 0)
                    <div>
                        <b>There are no posts maded</b>
                        <p>Click here to create a post:
                            <button type="button" class="btn btn-light create_post">
                                <a href="{{ url('/image/create') }}">
                                    Create post
                                </a>
                            </button>
                        </p>
                    </div>
                    @else
                    {{-- Hier worden de posts laten zien die je hebt upgeloaded --}}
                    @foreach($uploads as $upload)
                        <div class="col-md-8">
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
                @endif
            </div>
        </div>
    <script>
        var token = '{{Session::token()}}';
        var urlLike = '{{route('like', ['page' => 1])}}';
    </script>
@endsection

