@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-light mb-4">Create Product</h1>
        <div class="card bg-dark shadow-sm">
            <div class="card-body">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name" class="form-label text-light">Name</label>
                        <input type="text" class="form-control bg-secondary text-light border-0" id="name" name="name" placeholder="Enter product name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="category_id" class="form-label text-light">Category</label>
                        <select class="form-control bg-secondary text-light border-0" id="category_id" name="category_id" required>
                            <option value="" disabled selected>Select a category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="supplier_id" class="form-label text-light">Supplier</label>
                        <select class="form-control bg-secondary text-light border-0" id="supplier_id" name="supplier_id" required>
                            <option value="" disabled selected>Select a supplier</option>
                            @foreach($suppliers as $supplier)
                                <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="price" class="form-label text-light">Price</label>
                        <input type="number" class="form-control bg-secondary text-light border-0" id="price" name="price" step="0.01" placeholder="Enter product price" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="quantity" class="form-label text-light">Quantity</label>
                        <input type="number" class="form-control bg-secondary text-light border-0" id="quantity" name="quantity" placeholder="Enter product quantity" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Create Product</button>
                </form>
            </div>
        </div>
    </div>
@endsection
