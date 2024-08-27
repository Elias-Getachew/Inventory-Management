@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-light">Suppliers</h1>
            <a href="{{ route('suppliers.create') }}" class="btn btn-primary">Add New Supplier</a>
        </div>

        <div class="card bg-dark shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-dark table-striped table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th class="text-center" style="width: 200px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($suppliers as $supplier)
                                <tr>
                                    <td>{{ $supplier->name }}</td>
                                    <td>{{ $supplier->email }}</td>
                                    <td>{{ $supplier->phone }}</td>
                                    <td>{{ $supplier->address }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-warning btn-sm mx-1">Edit</a>
                                        <a href="{{ route('suppliers.show', $supplier->id) }}" class="btn btn-info btn-sm mx-1">View</a>
                                        <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm mx-1" onclick="return confirm('Are you sure you want to delete this supplier?');">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                @if ($suppliers->isEmpty())
                    <div class="alert alert-warning text-center">
                        No suppliers found. <a href="{{ route('suppliers.create') }}">Add a new supplier</a>.
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
