@extends('index')

@section('content')

    <div class="container mt-4">        
        <h1 class="text-center mb-4">Contact Page</h1>

        <hr/>

        @include('includes.messages')

        <div class="row">
            <div class="col">
                {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST']) !!}    
                    <div class="form-group">
                        <h5>{{Form::label('name', 'Name')}}</h5>        
                        {{Form::text('name', '', ['class' => 'form-control', 'placeholder'=>'Title'])}}        
                    </div>
                    <div class="form-group">
                        <h5>{{Form::label('email', 'Email')}}</h5>        
                        {{Form::text('email', '', ['class' => 'form-control', 'placeholder'=>'Title'])}}        
                    </div>
                    <div class="form-group">
                        <h5>{{Form::label('contact', 'Contact')}}</h5>        
                        {{Form::text('contact', '', ['class' => 'form-control', 'placeholder'=>'Title'])}}        
                    </div>
                    <div class="form-group">        
                        <h5>{{Form::label('description', 'Description')}}</h5>
                        {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder'=>'Description'])}}        
                    </div>
                    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                {!! Form::close() !!}
            </div>
        </div>

    </div>

@endsection