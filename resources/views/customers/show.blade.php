@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card bg-dark text-light shadow-sm">
            <div class="card-header">
                <h2>Customer Details</h2>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <strong>Name:</strong> {{ $customer->name }}
                </div>
                <div class="mb-3">
                    <strong>Email:</strong> {{ $customer->email }}
                </div>
                <div class="mb-3">
                    <strong>Phone:</strong> {{ $customer->phone }}
                </div>
                <div class="mb-3">
                    <strong>Address:</strong> {{ $customer->address }}
                </div>
                <a href="{{ route('customers.index') }}" class="btn btn-secondary">Back to Customers</a>
                <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning">Edit Customer</a>
            </div>
        </div>
    </div>
@endsection
