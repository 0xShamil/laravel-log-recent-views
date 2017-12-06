@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Showing your last {{ $postsLimit }} viewed posts</div>

                <div class="panel-body">
                    @if($posts->count())
                        @foreach($posts as $post)
                            <article>
                                <h4><a href="/posts/{{ $post->id }}">{{ $post->id }}. {{ $post->title }}</a></h4>
                                <div class="body">{{ $post->content }}</div>
                            </article>

                            <hr>
                        @endforeach
                    @else
                        You have not viewed any posts recently.
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection