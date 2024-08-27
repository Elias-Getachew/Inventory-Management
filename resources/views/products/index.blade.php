@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-light">Products</h1>
            <a href="{{ route('products.create') }}" class="btn btn-primary">Add New Product</a>
        </div>

        <div class="card bg-dark shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-dark table-striped table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Supplier</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th class="text-center" style="width: 200px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{{ $product->supplier->name }}</td>
                                    <td>${{ number_format($product->price, 2) }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm mx-1">Edit</a>
                                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm mx-1">View</a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm mx-1" onclick="return confirm('Are you sure you want to delete this product?');">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                @if ($products->isEmpty())
                    <div class="alert alert-warning text-center">
                        No products found. <a href="{{ route('products.create') }}">Add a new product</a>.
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
