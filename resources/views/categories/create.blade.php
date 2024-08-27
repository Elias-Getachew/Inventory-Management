
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card bg-dark text-light shadow-sm">
            <div class="card-header">
                <h2>Create Category</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Create Category</button>
                    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection

