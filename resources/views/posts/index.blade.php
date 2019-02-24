@extends('layouts.app')
@section('content')
    <div class="container">

        @if(session('info'))
            <div class="alert alert-info">
                {{ session('info') }}
            </div>
        @endif

        @foreach($posts as $post)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>
                        <i class="far fa-newspaper"></i>
                        <a href="{{ url("/posts/view/$post->id") }}">
                            {{ $post->title }}
                        </a>
                    </b>
                </div>
                <div class="panel-body">
                    {!! $post->body !!}
                </div>
                <div class="panel-footer">
                    <small>{{ $post->created_at->diffForHumans() }}</small>
                    <b>in {{ $post->category->name or 'Unknown' }}</b>

                    <div class="pull-right">
                        <i class="fas fa-comment"></i>
                        {{ count($post->comments) }}
                    </div>
                </div>
            </div>
        @endforeach

        {{ $posts->links() }}
    </div>
@endsection
