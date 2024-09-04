@extends('layouts.commerce')

@section('content')
<div class="p-6 bg-white rounded-lg shadow-lg">
    <div class="overflow-x-auto">
        <table id="cart" class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" style="width:50%">Product</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" style="width:10%">Price</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" style="width:8%">Quantity</th>
                    <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider text-center" style="width:22%">Subtotal</th>
                    <th class="px-6 py-3" style="width:10%"></th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @php $total = 0 @endphp
                @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                        @php $total += $details['price'] * $details['quantity'] @endphp
                        <tr data-id="{{ $id }}" class="hover:bg-gray-50">
                            <td data-th="Product" class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center space-x-4">
                                    <img src="{{ asset('storage/' . $details['photo']) }}" class="w-24 h-24 object-cover rounded-md" alt="{{ $details['name'] }}" />
                                    <div>
                                        <h4 class="text-base font-semibold text-gray-900">{{ $details['name'] }}</h4>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price" class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">${{ $details['price'] }}</td>
                            <td data-th="Quantity" class="px-6 py-4 whitespace-nowrap">
                                <input type="number" value="{{ $details['quantity'] }}" class="form-input mt-1 block w-full sm:text-sm sm:leading-5 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 cart_update" min="1" />
                            </td>
                            <td data-th="Subtotal" class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 text-center">${{ $details['price'] * $details['quantity'] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <button class="text-red-600 hover:text-red-800 focus:outline-none cart_remove"><i class="fa fa-trash-o"></i> Delete</button>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5"  class="px-6 py-4 cursor-pointer text-right text-lg font-semibold text-gray-900">
                        <strong id="seetotal">press to see Total: <span id="total" class="pl-6 ml-2" >${{ $total }}</span></strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="px-6 py-4 text-right">
                        <a href="{{ url('/ecommerce') }}" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            <i class="fa fa-arrow-left"></i> Continue Shopping
                        </a>
                        <button id="checkout" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            <i class="fa fa-money"></i> Checkout
                        </button>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

@endsection

@section('scripts')
<script type="text/javascript">
    $(".cart_update").change(function (e) {
        e.preventDefault();

        var ele = $(this);
        var quantity = ele.val();

        $.ajax({
            url: '{{ route('update_cart') }}',
            method: "PATCH",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("data-id"),
                quantity: quantity
            },
        });
    });

    $(".cart_remove").click(function (e) {
        e.preventDefault();
   
        var ele = $(this);
   
        if(confirm("Do you really want to remove?")) {
            $.ajax({
                url: '{{ route('remove_from_cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

    $("#checkout").click(function (e) {
        e.preventDefault();

        $.ajax({
            url: '{{ route('checkout') }}',
            method: "POST",
            data: {
                _token: '{{ csrf_token() }}'
            },
            success: function (response) {
                alert('Order placed successfully!');
                window.location.href = '{{ url("/ecommerce") }}'; // Redirect to a confirmation page or back to the product list
            }
        });
    });

    $("#seetotal").click(function(){
        window.location.reload();
    });
</script>
@endsection
