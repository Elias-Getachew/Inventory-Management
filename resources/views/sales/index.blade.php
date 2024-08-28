@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-light">Sales</h1>
            <a href="{{ route('sales.create') }}" class="btn btn-primary">Add New Sale</a>
        </div>

        <div class="card bg-dark shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-dark table-striped table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>Product</th>
                                <th>Customer</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Date</th>
                                <th class="text-center" style="width: 400px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sales as $sale)
                                <tr>
                                    <td>{{ $sale->product->name }}</td>
                                    <td>{{ $sale->customer->name }}</td>
                                    <td>{{ $sale->quantity }}</td>
                                    <td>${{ $sale->total_price }}</td>
                                    <td>{{ $sale->created_at->format('Y-m-d') }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('sales.edit', $sale->id) }}" class="btn btn-warning btn-sm mx-1">Edit</a>
                                        <a href="{{ route('sales.show', $sale->id) }}" class="btn btn-info btn-sm mx-1">View</a>
                                        <form action="{{ route('sales.destroy', $sale->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm mx-1" onclick="return confirm('Are you sure you want to delete this sale?');">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                @if ($sales->isEmpty())
                    <div class="alert alert-warning text-center">
                        No sales found. <a href="{{ route('sales.create') }}">Add a new sale</a>.
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
