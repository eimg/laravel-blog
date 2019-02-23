@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{ $category->name }}">
            </div>

            <input type="submit" value="Update Category" class="btn btn-primary">
        </form>
    </div>
@endsection
