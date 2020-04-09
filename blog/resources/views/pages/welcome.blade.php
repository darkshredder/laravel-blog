
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
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis omnis accusantium, necessitatibus dolores ut, cumque aliquid ullam consequuntur hic, consequatur quaerat tenetur maiores. Illo inventore itaque incidunt esse atque? Commodi?</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis omnis accusantium, necessitatibus dolores ut, cumque aliquid ullam consequuntur hic, consequatur quaerat tenetur maiores. Illo inventore itaque incidunt esse atque? Commodi?</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis omnis accusantium, necessitatibus dolores ut, cumque aliquid ullam consequuntur hic, consequatur quaerat tenetur maiores. Illo inventore itaque incidunt esse atque? Commodi?</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis omnis accusantium, necessitatibus dolores ut, cumque aliquid ullam consequuntur hic, consequatur quaerat tenetur maiores. Illo inventore itaque incidunt esse atque? Commodi?</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
    </div>
    <div class="col-md-3 col-md-offset-1">
        <h2>Sidebar</h2>
    </div>
@endsection