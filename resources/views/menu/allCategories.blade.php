@extends('app')

@section('content')
<div class="container">
    <h1>Categories</h1>
    <ul>
        @foreach($categories as $category)
            <!-- <li><a href="{{ route('menu.subcategories', ['category' => $category]) }}">{{ $category->cat_name }}</a></li> -->
            <li><a href="{{ route('menu.subcategories', $category->slug) }}">{{ $category->cat_name }}</a></li>

        @endforeach
    </ul>
</div>
@endsection
