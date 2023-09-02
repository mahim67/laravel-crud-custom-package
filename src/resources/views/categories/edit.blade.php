@extends('bondstein-code-challenge::layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Update Category</h2>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <a href="{{ route('categories.index') }}" class="btn btn-sm btn-outline-primary">Categories</a>
            </div>
            <form action="{{ route('categories.update', ['category' => $category->id]) }}" method="post">
                @csrf
                @method('PUT')
                @include('bondstein-code-challenge::categories.form')
                <div class="form-group mt-2">
                    <button class="btn btn-sm btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
