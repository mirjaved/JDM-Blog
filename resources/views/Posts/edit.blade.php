@extends('index')

@section('content')

<div class="container mt-4">

<h2>Update Post</h2>
<hr/>

@include('includes.messages')

{!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}    
    <div class="form-group">
        <h5>{{Form::label('title', 'Title')}}</h5>
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder'=>'Title'])}}        
    </div>
    <div class="form-group">        
        <h5>{{Form::label('description', 'Description')}}</h5>
        {{Form::textarea('description', $post->description, ['class' => 'form-control', 'placeholder'=>'Description'])}}        
    </div>
    <div class="form-group">        
        <h5>{{Form::label('cover_image', 'Cover Image')}}</h5>
        {{Form::file('cover_image')}}        
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Update', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}

@endsection

