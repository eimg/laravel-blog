@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <input type="submit" value="Add Category" class="btn btn-primary">
        </form>
    </div>
@endsection
