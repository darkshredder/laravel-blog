@extends('main')
@section('title',' Create New Post')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            {!! Form::open(['route' => 'posts.store']) !!}
            {{form::label('title', 'Title:')}}
            {{form::text('title', null,array('class' => 'form-control'))}}
            {{form::label('body', 'Body:')}}
            {{form::textarea('body', null,array('class' => 'form-control', 'placeholder' => 'Enter your posts here'))}}
            {{form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;'))}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection