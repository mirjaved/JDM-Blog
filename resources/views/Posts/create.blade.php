@extends('index')

@section('content')

<div class="container mt-4">

<h2>Create Post</h2>
<hr/>

@include('includes.messages')

{!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}    
    <div class="form-group">
        <h5>{{Form::label('title', 'Title')}}</h5>        
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder'=>'Title'])}}        
    </div>
    <div class="form-group">        
        <h5>{{Form::label('description', 'Description')}}</h5>
        {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder'=>'Description'])}}        
    </div>
    <div class="form-group">        
        <h5>{{Form::label('cover_image', 'Cover Image')}}</h5>
        {{Form::file('cover_image')}}        
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}

</div> <!-- /container -->

@endsection