@extends('layouts.app')
@section('content')
    <div class="container">

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                    {{ $err . " " }}
                @endforeach
            </div>
        @endif

        <form method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label>Body</label>
                <textarea name="body" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="category_id">
                    <option value="1">Technology</option>
                    <option value="2">Internet</option>
                </select>
            </div>

            <input type="submit" value="Add Post" class="btn btn-primary">
        </form>
    </div>
@endsection
