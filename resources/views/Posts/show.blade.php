@extends('index')

@section('content')

<div class="container mt-4">   
    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title">Are you sure you want to delete:</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <h5>{{ $post->title }}</h5>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>        
                <div>
                    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}    
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!! Form::close() !!}
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="float-none">
        <div class="float-left">
            <a href="/posts" class="btn btn-primary">Go back</a>            
        </div>
        @if (!Auth::guest())
            @if (Auth::user()->id == $post->user_id)
                <div class="float-right">
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
                        Delete
                    </button>
                </div>       
                <div class="float-right mr-2">
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                </div>
            @endif
        @endif
    </div>

    <div class="clearfix"></div>

    <div class="mt-4">
        <h3><img src="/storage/cover_images/{{ $post->cover_image }}" alt="Image" style="width: 100%;"></h3>
        <h3>{{ $post->title }}</h3>
        <p>Published: {{ $post->created_at }}</p>
        <p>{{ $post->description }}</p>
    </div>

</div> <!-- /container -->

@endsection