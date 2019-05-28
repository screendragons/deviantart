@extends('layouts.default')

@section('title', 'Upload creations just right here')

@section('content')
    @include('partials.header')

{{-- <!DOCTYPE html>
<html>
    <head>
        <title>Upload creations just right here</title>
        <meta name="_token" content="{{csrf_token()}}" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
    </head>
    <body> --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <div class="container">

            <h3 class="jumbotron" id="margin">Upload here your creation!</h3>
            <div class="form-group">
                <label for="exampleInputTitle">Title</label>
                <input type="text" class="form-control" id="exampleInputTitle" aria-describedby="emailHelp" placeholder="Enter here your title">
                <small id="emailHelp" class="form-text text-muted">Just so we and other people know what kind of image it is :)</small>
              </div>
              <div class="form-group">
                <label for="exampleInputDescription">Description</label>
                <input type="text" class="form-control" id="exampleInputDescription" placeholder="Description">
              </div>
            <form method="post" action="{{url('image/upload/store')}}" enctype="multipart/form-data"
            class="dropzone" id="dropzone">
            @csrf

            </form>
            <script type="text/javascript">
                Dropzone.options.dropzone =
                 {
                    maxFilesize: 12,
                    renameFile: function(file) {
                        var dt = new Date();
                        var time = dt.getTime();
                       return time+file.name;
                },
                acceptedFiles: ".jpeg,.jpg,.png,.gif",
                addRemoveLinks: true,
                timeout: 50000,
                removedfile: function(file)
                {
                    var name = file.upload.filename;
                    $.ajax({
                        headers: {
                                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                },
                        type: 'POST',
                        url: '{{ url("image/delete") }}',
                        data: {filename: name},
                        success: function (data){
                            console.log("File has been successfully removed!!");
                        },
                        error: function(e) {
                            console.log(e);
                        }});
                        var fileRef;
                        return (fileRef = file.previewElement) != null ?
                        fileRef.parentNode.removeChild(file.previewElement) : void 0;
                    },
                success: function(file, response)
                {
                    console.log(response);
                },
                error: function(file, response)
                {
                   return false;
                }
            };
            </script>

            <form action="{{ route('save') }}" method="get">
                @csrf
                <button> Save </button>
            </form>
        </div>


    {{-- </body>
</html>
 --}}
@stop
