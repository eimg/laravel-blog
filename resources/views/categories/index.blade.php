@extends('layouts.app')
@section('content')
    <div class="container">
        <ul class="list-group">
            @foreach($categories as $category)
                <li class="list-group-item">
                    {{ $category->name }}
                    <div class="pull-right">
                        <a href="{{ url("/categories/edit/$category->id") }}">Edit</a> |
                        <a href="{{ url("/categories/delete/$category->id") }}"
                            class="text-danger">Delete</a>
                    </div>
                </li>
            @endforeach
        </ul>

        <a href="{{ url('/categories/add') }}" class="btn btn-primary">+ New Category</a>
    </div>
@endsection
