@extends('bondstein-code-challenge::layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Create Category</h2>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <a href="{{ route('categories.index') }}" class="btn btn-sm btn-outline-primary">Categories</a>
            </div>
            <form action="{{ route('categories.store') }}" method="post">
                @csrf

                @include('bondstein-code-challenge::categories.form')

                <div class="form-group mt-2">
                    <button class="btn btn-sm btn-success px-3">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
