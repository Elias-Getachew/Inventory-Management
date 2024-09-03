@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-light">Category Management</h1>
            <a href="{{ route('categories.create') }}" class="btn btn-primary">Add New Category</a>
        </div>

        <div class="card bg-dark shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-dark table-striped table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Photo</th>
                                <th style="width: 400px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->description }}</td>
                                    <td>
                                        @if($category->photo)
                                            <img src="{{ asset('storage/' . $category->photo) }}" alt="Category Photo" style="width: 100px; height: auto;">
                                        @else
                                            No Photo
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm mx-1">Edit</a>
                                        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info btn-sm mx-1">View</a>
                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm mx-1" onclick="return confirm('Are you sure you want to delete this category?');">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">
                                        No categories found. <a href="{{ route('categories.create') }}">Add a new category</a>.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
