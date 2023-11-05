@extends('app')

@section('content')
<div class="container">
    <h1>Subcategories of {{ $category->cat_name }}</h1>
    <ul>
        @foreach($subcategories as $subcategory)
            <li><a href="{{ route('menu.products', ['category' => $category->cat_name, 'subcategory' => $subcategory->subcat_name]) }}">{{ $subcategory->subcat_name }}</a></li>
        @endforeach
    </ul>
</div>
@endsection
