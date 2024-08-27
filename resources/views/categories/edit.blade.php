

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card bg-dark text-light shadow-sm">
            <div class="card-header">
                <h2>Edit Catagory</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('categories.update', $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Customer</button>
                    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection




