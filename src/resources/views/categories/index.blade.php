@extends('bondstein-code-challenge::layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Categories</h2>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <a href="{{ route('categories.create') }}" class="btn btn-sm btn-outline-primary">Create Category</a>
            </div>
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <table class="table table-sm table-border">
                <thead>
                    <tr class="text-center">
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $category->title }}</td>
                            <td>{{ $category->description ?? '' }}</td>
                            <td class="text-center">
                                {{ $category->created_at ? $category->created_at->diffForHumans() : '' }}
                            </td>
                            <td class="d-flex justify-content-center">
                                <a href="{{ route('categories.show', ['category' => $category->id]) }}"
                                    class="btn btn-sm btn-outline-info mx-1">Show</a>
                                <a href="{{ route('categories.edit', ['category' => $category->id]) }}"
                                    class="btn btn-sm btn-outline-primary mx-1">Edit</a>
                                <div>
                                    <form action="{{ route('categories.destroy', ['category' => $category->id]) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger mx-1" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr class="text-center">
                            <td colspan="5">No Records Found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
