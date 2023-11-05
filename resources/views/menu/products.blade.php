@extends('app')

@section('content')
<div class="container">
    <h1>Products in {{ $subcategory->subcat_name }}</h1>
    <ul>
        @foreach($products as $product)
            <li><a href="{{ route('menu.productDetails', ['category' => $category->cat_name, 'subcategory' => $subcategory->subcat_name, 'product' => $product->prod_name]) }}">{{ $product->prod_name }}</a></li>
        @endforeach
    </ul>
</div>
@endsection
