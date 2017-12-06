@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    {{ $post->title }}
                    <span class="pull-right">
                        Viewd: {{ $post->views() }} times
                    </span>
                </div>

                <div class="panel-body">
                    {{ $post->content }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
