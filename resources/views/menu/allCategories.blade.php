@extends('menu.sidemenu')

@section('menubody')
<div class="row justify-content-center text-center">
<div class="col-md-10 pmclr">
        @foreach($categories as $category)
        
    <h2>
{{ $category->cat_name }}
</h2><div class="row justify-content-center text-center pmclr">
            @foreach($category->subcategories as $subcategory)
            <div style="min-height: 200px;" class="col-3 opbg d-flex justify-content-center align-items-center">
<a style="height: 100%; width: 100%;" href="{{ route('menu.products', ['category' => $category->cat_id, 'subcategory' => $subcategory->subcat_id]) }}" class="pmclr">
<div class="borderprodcat p-2" style="height: 100%;"><div class="prodcat" style="background-image: url('/images/{{ rawurlencode($subcategory->subcat_id) }}.png');">
<div class="prodcatop"><h4>
{{ $subcategory->subcat_name }}
</h4></div></div></div></a></div>
            @endforeach
            
        @endforeach
        </div></div></div></div></div></div>
@endsection