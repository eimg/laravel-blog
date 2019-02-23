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
                        <a href="{{ url("/posts/view/$post->id") }}">
                            {{ $post->title }}
                        </a>
                    </b>
                </div>
                <div class="panel-body">
                    {{ $post->body }}
                </div>
                <div class="panel-footer">
                    <small>{{ $post->created_at }}</small>
                </div>
            </div>
        @endforeach

        {{ $posts->links() }}
    </div>
@endsection
