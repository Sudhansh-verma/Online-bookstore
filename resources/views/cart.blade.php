@extends('layouts.app')

@section('content')
<div class="container mt-4">
  <h2>Your Cart</h2>
  @if($cart)
    <table class="table">
      <tr>
        <th>Book</th>
        <th>Price</th>
        <th>Qty</th>
        <th>Total</th>
        <th></th>
      </tr>
      @php $total = 0; @endphp
      @foreach($cart as $id => $item)
        @php $total += $item['price'] * $item['quantity']; @endphp
        <tr>
          <td>{{ $item['title'] }}</td>
          <td>₹{{ $item['price'] }}</td>
          <td>{{ $item['quantity'] }}</td>
          <td>₹{{ $item['price'] * $item['quantity'] }}</td>
          <td><a href="{{ route('cart.remove', $id) }}" class="btn btn-danger btn-sm">Remove</a></td>
        </tr>
      @endforeach
    </table>
    <h4>Total: ₹{{ $total }}</h4>
    <a href="{{ route('cart.checkout') }}" class="btn btn-success">Checkout</a>
  @else
    <p>Your cart is empty!</p>
  @endif
</div>
@endsection
