@extends('app')

@section('content')
<div class="container">
    <h1>Product Details</h1>
    <h2>{{ $product->prod_name }}</h2>
    <p>Price: {{ $product->price }}</p>
    <p>Description: {{ $product->composition }}</p>
</div>
@endsection
