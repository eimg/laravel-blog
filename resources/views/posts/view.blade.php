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
            <div class="panel-footer">
                <small>{{ $post->created_at }}</small>
                <div class="pull-right">
                    <a href="{{ url("/posts/delete/$post->id") }}" class="btn btn-danger">
                        Del
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
