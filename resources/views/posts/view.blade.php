@extends('layouts.app')
@section('content')
    <div class="container">

        @if(session('info'))
            <div class="alert alert-info">
                {{ session('info') }}
            </div>
        @endif

        <div class="panel panel-default">
            <div class="panel-heading">
                <b>{{ $post->title }}</b>
            </div>
            <div class="panel-body">
                {!! $post->body !!}
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
                    {!! $comment->comment !!}
                </div>
                <div class="panel-footer">
                    {{ $comment->created_at->diffForHumans() }}
                    <b>by {{ $comment->user->name }}</b>
                    <div class="pull-right">
                        <a href="{{ url("/comments/delete/$comment->id") }}">Del</a>
                    </div>
                </div>
            </div>
        @endforeach

        @if(Auth::user())
            <form action="{{ url('/comments/add') }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <textarea name="comment" class="form-control"></textarea>
                <input type="submit" value="Add Comment" class="btn btn-default">
            </form>
            <br><br>
        @endif
    </div>
@endsection
