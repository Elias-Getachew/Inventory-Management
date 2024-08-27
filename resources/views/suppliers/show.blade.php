@extends('layouts.app')

@section('content')
    <h1 class="text-light text-center mb-4">Supplier Details</h1>
    <div class="card bg-dark shadow-sm mx-auto" style="max-width: 600px;">
        <div class="card-body">
            <h5 class="card-title text-center text-light mb-4">{{ $supplier->name }}</h5>
            <hr class="bg-secondary">
            <p class="card-text text-light"><strong>Email:</strong> {{ $supplier->email }}</p>
            <p class="card-text text-light"><strong>Phone:</strong> {{ $supplier->phone }}</p>
            <p class="card-text text-light"><strong>Address:</strong> {{ $supplier->address }}</p>
            <hr class="bg-secondary">
            <div class="text-center mt-4">
                <a href="{{ route('suppliers.index') }}" class="btn btn-secondary">Back to Suppliers</a>
            </div>
        </div>
    </div>
@endsection
