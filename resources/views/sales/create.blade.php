@extends('layouts.app')

@section('content')
    <h1 class="text-light mb-4">Create Sale</h1>
    <div class="card bg-dark shadow-sm">
        <div class="card-body">
            <form action="{{ route('sales.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="product_id" class="form-label text-light">Product</label>
                    <select class="form-control bg-secondary text-light border-0" id="product_id" name="product_id" required>
                        @foreach($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="customer_id" class="form-label text-light">Customer</label>
                    <select class="form-control bg-secondary text-light border-0" id="customer_id" name="customer_id" required>
                        @foreach($customers as $customer)
                            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="quantity" class="form-label text-light">Quantity</label>
                    <input type="number" class="form-control bg-secondary text-light border-0" id="quantity" name="quantity" required>
                </div>
                <div class="form-group mb-4">
                    <label for="total_price" class="form-label text-light">Total Price</label>
                    <input type="number" class="form-control bg-secondary text-light border-0" id="total_price" name="total_price" step="0.01" required>
                </div>
                <button type="submit" class="btn btn-success w-100">Create Sale</button>
            </form>
        </div>
    </div>
@endsection
