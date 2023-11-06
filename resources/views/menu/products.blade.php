@extends('menu.sidemenu')

@section('menubody')
<div class="container">
    <h1>Products in {{ $subcategory->subcat_name }}</h1>
    <ul>
        @foreach($products as $product)
            <li><a href="{{ route('menu.productDetails', ['category' => $category->cat_id, 'subcategory' => $subcategory->subcat_id, 'product' => $product->prod_id]) }}">{{ $product->prod_name }}</a></li>
        @endforeach
    </ul>
</div>
@endsection
