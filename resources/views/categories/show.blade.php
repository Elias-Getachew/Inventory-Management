@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Category Details</h1>
        <div class="card bg-dark text-light shadow-sm">
            <div class="card-body">
                <!-- Display Category Name -->
                <h5 class="card-title">{{ $category->name }}</h5>

                <!-- Display Description -->
                <p class="card-text">
                    <strong>Description:</strong> {{ $category->description ?? 'No description provided.' }}
                </p>

                <!-- Display Photo -->
                @if ($category->photo)
                    <img src="{{ asset('storage/' . $category->photo) }}" alt="Category Photo" class="img-fluid" style="max-width: 300px;">
                @else
                    <p>No photo available.</p>
                @endif

                <!-- Back Button -->
                <a href="{{ route('categories.index') }}" class="btn btn-secondary mt-3">Back to Categories</a>
            </div>
        </div>
    </div>
@endsection
