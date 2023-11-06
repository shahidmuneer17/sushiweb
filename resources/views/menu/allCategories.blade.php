@extends('menu.sidemenu')

@section('menubody')
<div class="container">
    <h1>Categories</h1>
    <ul>
        @foreach($categories as $category)
            <h5><a href="{{ route('menu.subcategories', $category->cat_id) }}">{{ $category->cat_name }}</a></h5>
            @foreach($category->subcategories as $subcategory)
            <li><a href="{{ route('menu.products', ['category' => $category->cat_id, 'subcategory' => $subcategory->subcat_id]) }}">{{ $subcategory->subcat_name }}</a></li>
            @endforeach
            <br>
        @endforeach
    </ul>
</div>
@endsection
