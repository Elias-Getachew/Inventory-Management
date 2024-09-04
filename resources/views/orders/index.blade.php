@extends('layouts.app')

@section('content')

<div class="container">
    @foreach ($order as $order)
        
    
    <h1>Order Details</h1>
    <p>Order ID: {{ $order->id }}</p>
    <p>Total Price: ${{ $order->total_price }}</p>


    @endforeach



   
</div>
@endsection
