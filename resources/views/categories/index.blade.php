

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-light">Customer Management</h1>
            <a href="{{ route('categories.create') }}" class="btn btn-primary">Add New catagory</a>
        </div>

        <div class="card bg-dark shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-dark table-striped table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>Name</th>
                                <th style="width: 200px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    
                                    <td class="text-center">
                                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm mx-1">Edit</a>
                                        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info btn-sm mx-1">View</a>
                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm mx-1" onclick="return confirm('Are you sure you want to delete this customer?');">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                @if ($categories->isEmpty())
                    <div class="alert alert-warning text-center">
                        No customers found. <a href="{{ route('categories.create') }}">Add a new catagory</a>.
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

