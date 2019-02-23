@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="{{  $post->title }}">
            </div>
            <div class="form-group">
                <label>Body</label>
                <textarea name="body" class="form-control">{{ $post->body }}</textarea>
            </div>
            <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="category_id">
                    <option value="1" @if($post->category_id == 1) selected @endif>
                        Technology </option>
                    <option value="2" @if($post->category_id == 2) selected @endif>
                            Internet </option>
                </select>
            </div>
            <input type="submit" value="Update Post" class="btn btn-primary">
        </form>
    </div>
@endsection
