@extends('layouts.app')

@section('content')
<div class="container mt-4">
  <h2>Available Books</h2>
  <div class="row">
    @foreach ($books as $book)
      <div class="col-md-3 mt-3">
        <div class="card p-2">
          <h5>{{ $book->title }}</h5>
          <p>Author: {{ $book->author }}</p>
          <p>Price: ₹{{ $book->price }}</p>
          <a href="{{ route('cart.add', $book->id) }}" class="btn btn-primary btn-sm">Add to Cart</a>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
