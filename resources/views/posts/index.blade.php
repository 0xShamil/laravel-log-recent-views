@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Recent Posts</div>

                <div class="panel-body">
                    @foreach($posts as $post)
                        <article>
                            <h4><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h4>
                            <div class="body">{{ $post->content }}</div>
                        </article>

                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection