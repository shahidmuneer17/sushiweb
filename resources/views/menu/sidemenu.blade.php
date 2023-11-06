@extends('app')

@section('content')
<style>
.acdbtn a{
    text-decoration: none;
    color: #E4D4BF;
}
.goback {
    text-decoration: none;
    color: var(--primary-color);
}
</style>
<div class="col-md-3">
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        @foreach($categories as $category)
        <h2 class="accordion-header" id="heading{{ $category->cat_id }}">
            
                <button class="accordion-button acdbtn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $category->cat_id }}"aria-expanded="false" aria-controls="collapse{{ $category->cat_id }}">
                <a href="{{ route('menu.subcategories', $category->cat_id) }}">
                {{ $category->cat_name }}
                </a>
                </button>
            
        </h2>
        <div id="collapse{{ $category->cat_id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $category->cat_id }}" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                @foreach($category->subcategories as $subcategory)
                    <div class="accd"><a href="{{ route('menu.products', ['category' => $category->cat_id, 'subcategory' => $subcategory->subcat_id]) }}">{{ $subcategory->subcat_name }}</a></div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
@yield('menubody')
@endsection
