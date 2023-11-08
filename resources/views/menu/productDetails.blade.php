@extends('menu.sidemenu')

@section('menubody')
<div class="col-md-12">
    <a href="#" class="p-md-3 goback" onclick="goBack()">&lt; retour</a>
    <div class="row justify-content-center">
        <div class="col-md-12 pmclr">
            <div class="row justify-content-center pmclr opbg p-5">
                <div class="col-md-5 d-flex" style="background-color: black; justify-content: center;">
                    <div class="bgprod" style="width: 250px; height: 250px;">
                        <div style="position: relative;">
                            <img style="width: 250px; height: 250px; object-fit: cover;" src="/images/{{ ($product->imgsrc) }}">
                        </div>
                    </div>
                </div>

                @if($product->options->count())
                <div class="col-md-7 p-4">
                    <h2 class="mb-3" style="color: var(--sec-color);">{{ $product->prod_name }}</h2>

                    <h3>Options:</h3>
                    <select id="product_options" class="form-control">
                        <option value="0">Select an option</option>
                        @foreach ($product->options as $option)
                        <option value="{{ $option->option_id }}" data-price="{{ $option->option_price }}">
                            {{ $option->option_name }} (+{{ $option->option_price }}€)
                        </option>
                        @endforeach
                    </select>

                    <h2 class="mt-3" id="selected_option_price">{{ $product->price }}€</h2>
                    <p class="mb-5">SKU: {{ $product->sku }}</p>
                    <a href="{{ route('store-in-session', ['prod_id' => $product->id, 'option_id' => $option->option_id ]) }}" id="add-to-cart-link" role="button" class="sushibtn mt-3 disabled" disabled>Ajouter au panier</a>

                @else
                <div class="col-md-7 p-4">
                    <h2 class="mb-3" style="color: var(--sec-color);">{{ $product->prod_name }}</h2>

                    <h2 class="mt-3">{{ $product->price }}€</h2>
                    <p class="mb-5">SKU: {{ $product->sku }}</p>
                    <a href="{{ route('store-in-session', ['prod_id' => $product->id]) }}" role="button" class="sushibtn mt-3">Ajouter au panier</a>
                @endif

                <div class="row mt-5">
                    <div class="col-6">
                        <p class="text-center">COMPOSITION</p>
                        @php
                        $compositions = explode(',', $product->composition);
                        @endphp
                        @foreach ($compositions as $composition)
                            <p>{{ $composition }}</p>
                        @endforeach
                    </div>
                    <div class="col-6" style="border-left: 1px solid var(--primary-color);">
                        <p class="text-center">ALLERGENES</p>
                        @php
                        $allergenes = explode(',', $product->allergenes);
                        @endphp
                        @foreach ($allergenes as $allergene)
                            <p>{{ $allergene }}</p>
                        @endforeach
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <p class="text-left">{{ $product->text }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const productOptions = document.getElementById('product_options');
    const selectedOptionPrice = document.getElementById('selected_option_price');
    const addToCartLink = document.getElementById('add-to-cart-link');

    productOptions.addEventListener('change', function () {
        const selectedOption = productOptions.options[productOptions.selectedIndex];
        const optionPrice = parseFloat(selectedOption.getAttribute('data-price'));
        const basePrice = parseFloat({{ $product->price }});
        const totalPrice = basePrice + optionPrice;
        selectedOptionPrice.textContent = `${totalPrice.toFixed(2)}€`;

        // Update the 'Ajouter au panier' link with the selected option_id and option_price
        const originalUrl = addToCartLink.getAttribute('href');
        const baseUrl = originalUrl.substring(0, originalUrl.indexOf('option_id=') + 'option_id='.length);
        addToCartLink.setAttribute('href', baseUrl + selectedOption.value + '&option_price=' + optionPrice);
        addToCartLink.classList.remove('disabled');
        addToCartLink.removeAttribute('disabled');
    });
</script>
@endsection


