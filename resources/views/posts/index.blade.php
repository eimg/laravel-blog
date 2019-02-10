{{-- resources/views/posts/index.blade.php --}}

@extends('layouts.app')
@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>{{ $post->title }}</b>
                </div>
                <div class="panel-body">
                    {{ $post->body }}
                </div>
                <div class="panel-footer">
                    <small>{{ $post->created_at }}</small>
                </div>
            </div>
        @endforeach
    </div>
@endsection
