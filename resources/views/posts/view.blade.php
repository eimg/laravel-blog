@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <b>{{ $post->title }}</b>
            </div>
            <div class="panel-body">
                {{ $post->body }}
            </div>
            <div class="panel-footer clearfix">
                <small>{{ $post->created_at->diffForHumans() }}</small>
                <b>in {{ $post->category->name }}</b>

                <div class="pull-right">
                    <a href="{{ url("/posts/edit/$post->id") }}" class="btn btn-default">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <a href="{{ url("/posts/delete/$post->id") }}" class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                    </a>
                </div>
            </div>
        </div>

        <h3>Comments ( {{ count($post->comments) }} )</h3>
        @foreach($post->comments as $comment)
            <div class="panel panel-default">
                <div class="panel-body">
                    {{ $comment->comment }}
                </div>
            </div>
        @endforeach
    </div>
@endsection
