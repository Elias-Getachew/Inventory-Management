@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-light mb-4">Product Details</h1>
        <div class="card bg-dark shadow-sm">
            <div class="card-body">
                <h5 class="card-title text-light">{{ $product->name }}</h5>
                <p class="card-text text-light"><strong>Category:</strong> {{ $product->category->name }}</p>
                <p class="card-text text-light"><strong>Supplier:</strong> {{ $product->supplier->name }}</p>
                <p class="card-text text-light"><strong>Price:</strong> ${{ $product->price }}</p>
                <p class="card-text text-light"><strong>Quantity:</strong> {{ $product->quantity }}</p>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>
            </div>
        </div>
    </div>
@endsection
