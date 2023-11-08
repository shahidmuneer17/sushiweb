@extends('menu.sidemenu')

@section('menubody')
<div class="row justify-content-center text-center">
    <div class="col-md-10 pmclr">
        <h2 class="p-5"> {{ $subcategory->subcat_name }}</h2>
        <div class="row justify-content-center text-center pmclr">
        @if($products->isEmpty())
            <p>No products found for this subcategory.</p>
            @else
            @foreach($products as $product)
            <div class="col-md-3 opbg" style="min-height: 200px;">
                <div class="bgprod m-1 d-flex align-items-center">
                    <a href="{{ route('menu.productDetails', ['category' => $category->cat_id, 'subcategory' => $subcategory->subcat_id, 'product' => $product->prod_id]) }}">
                        <div class="product-container">
                            <img class="w-100 pad-img" src="/images/{{ $product->imgsrc }}">
                            <p class="secclr">{{ $product->prod_name }}</p>
                            <p class="pclr pclr1">{{ $product->price }}€</p>
                            <a href="#" class="read-more-button" role="button">AJOUTER</a>
                            <!-- <a href="route('addtoCart', ['product' => product->prod_id]) class="read-more-button" role="button">AJOUTER</a> -->
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        @endif
        </div>
    </div>
</div>
</div>
</div>
@endsection