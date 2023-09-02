@extends('bondstein-code-challenge::layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Show Category</h2>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <a href="{{ route('categories.index') }}" class="btn btn-sm btn-outline-primary">Categories</a>
            </div>
            <table class="table table-sm table-hover">
                <tr>
                    <th>Title</th>
                    <td>{{ $category->title ?? null }}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{ $category->description ?? null }}</td>
                </tr>
                <tr>
                    <th>Created At</th>
                    <td>{{ $category->created_at->diffForHumans() }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
