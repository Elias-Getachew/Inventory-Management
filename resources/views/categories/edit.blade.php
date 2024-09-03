@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card bg-dark text-light shadow-sm">
            <div class="card-header">
                <h2>Edit Category</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Name Field -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name) }}" required>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Description Field -->
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description">{{ old('description', $category->description) }}</textarea>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Photo Field -->
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" class="form-control-file" id="photo" name="photo">
                        @if ($category->photo)
                            <img src="{{ asset('storage/' . $category->photo) }}" alt="Category Photo" style="width: 100px; height: auto; margin-top: 10px;">
                        @else
                            No Photo
                        @endif
                        @error('photo')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Submit and Back Buttons -->
                    <button type="submit" class="btn btn-primary">Update Category</button>
                    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
