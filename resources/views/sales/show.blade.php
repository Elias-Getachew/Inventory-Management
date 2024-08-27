@extends('layouts.app')

@section('content')
    <h1 class="text-light text-center mb-4">Sale Details</h1>
    <div class="card bg-dark shadow-sm mx-auto" style="max-width: 600px;">
        <div class="card-body">
            <h5 class="card-title text-center text-light mb-4">{{ $sale->product->name }}</h5>
            <hr class="bg-secondary">
            <p class="card-text text-light"><strong>Customer:</strong> {{ $sale->customer->name }}</p>
            <p class="card-text text-light"><strong>Quantity:</strong> {{ $sale->quantity }}</p>
            <p class="card-text text-light"><strong>Total Price:</strong> ${{ $sale->total_price }}</p>
            <p class="card-text text-light"><strong>Date:</strong> {{ $sale->created_at->format('Y-m-d') }}</p>
            <hr class="bg-secondary">
            <div class="text-center mt-4">
                <a href="{{ route('sales.index') }}" class="btn btn-secondary">Back to Sales</a>
            </div>
        </div>
    </div>
@endsection
