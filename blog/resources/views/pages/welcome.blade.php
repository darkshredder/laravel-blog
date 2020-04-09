
@extends('main')
@section('title','Homepage')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welocme to My Blog!</h1>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque voluptatum neque ab? Dicta sit esse, id, eveniet consequuntur hic obcaecati</p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a> <a class="btn btn-primary btn-lg" href="{{ route('posts.index') }}" role="button">All Posts</a>     </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            @foreach($posts as $post)
            <div class="post">
                <h3>{{$post->title}}</h3>
                <p>{{substr($post->body,0,300)}}</p>
            <a href="{{url('blog/'.$post->slug)}}" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            @endforeach
    </div>
    <div class="col-md-3 col-md-offset-1">
        <h2>Sidebar</h2>
    </div>
@endsection