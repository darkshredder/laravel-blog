@extends('main')
@section('title',' All Posts')
@section('content')
    <div class="row">
        <div class="col-md-10">
            <h1>All Posts</h1>
        </div>
        <div class="col-md-2">
        <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary"> Create New Post</a>
        </div>
        <div class="col-md-112">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                        <th>{{ $post->id }}</th>
                        <th>{{ $post->title }}</th>
                        <th>{{ substr($post->body,0,50) }}</th>
                        <th>{{ $post->created_at }}</th>
                        <th><a href="{{ route('posts.show',$post->id) }}" class="btn btn-success" >View</a> <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-primary" >Edit</a> <a href="{{ route('posts.destroy',$post->id) }}" class="btn btn-danger" method ='DELETE' >Delete</a>
                        {{--{!! Form::open(['route'=>['posts.destroy',$post->id],'method'=>'DELETE']) !!}
                        {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                        {!! Form::close() !!}--}}
                        </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
                <div class="text-center">
                    {!! $posts->links(); !!}
                </div>
        </div>
    </div>
@endsection