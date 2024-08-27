@extends('layouts.app')

@section('content')
    <h1 class="text-light mb-4">Edit Supplier</h1>
    <div class="card bg-dark shadow-sm">
        <div class="card-body">
            <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="name" class="form-label text-light">Name</label>
                    <input type="text" class="form-control bg-secondary text-light border-0" id="name" name="name" value="{{ $supplier->name }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="form-label text-light">Email</label>
                    <input type="email" class="form-control bg-secondary text-light border-0" id="email" name="email" value="{{ $supplier->email }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="phone" class="form-label text-light">Phone</label>
                    <input type="text" class="form-control bg-secondary text-light border-0" id="phone" name="phone" value="{{ $supplier->phone }}" required>
                </div>
                <div class="form-group mb-4">
                    <label for="address" class="form-label text-light">Address</label>
                    <input type="text" class="form-control bg-secondary text-light border-0" id="address" name="address" value="{{ $supplier->address }}" required>
                </div>
                <button type="submit" class="btn btn-success w-100">Update Supplier</button>
            </form>
        </div>
    </div>
@endsection
