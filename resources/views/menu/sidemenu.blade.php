@extends('app')

@section('content')
<style>
    .acdbtn a {
        text-decoration: none;
        color: #E4D4BF;
    }

    .goback {
        text-decoration: none;
        color: var(--primary-color);
    }
</style>
<div class="row pmclr">
    <div class="col-md-3 p-md-3">
        <h4>{{ session('restaurent') }}</h4>
        <h5><a style="color: var(--sec-clr);" href="index.php">+ Modifier</a></h5>
    </div>
    <div class="col-md-9 p-md-3">
        <div class="row">
            <div class="col-md-6">
                <h5 style="color: var(--sec-color); font-size: 24px;">@if(session('method', 'default') == 'delivery') livraison @else à venir chercher @endif</h5>
                <h6><a style="color: var(--sec-clr);" href="index.php">@if(session('method', 'default') == 'delivery') Passer en livraison @else Passer en chercher @endif</a></h6>
            </div>
            <div class="col-md-6" style="border-left: 1px dotted var(--primary-color); border-right: 1px dotted var(--primary-color);">
                <h6>Delais en cours: <span style="color: var(--sec-color); font-size: 24px;">@if(session('method', 'default') == 'delivery') 15 à 20 min @else 40 à 60 min @endif</span></h6>
                <h6>Autre creneau</h6>
            </div>

        </div>
    </div>
    <div class="col-md-3">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                @foreach($categories as $category)
                <h2 class="accordion-header" id="heading{{ $category->cat_id }}">

                    <button class="accordion-button acdbtn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $category->cat_id }}" aria-expanded="false" aria-controls="collapse{{ $category->cat_id }}">
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
    <div class="col-md-9 p-md-9">
    @yield('menubody')
    @endsection