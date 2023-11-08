@extends('app')

@section('content')
@php
    $total = 0;
@endphp
<div class="row opbg p-2 pmclr">
    <div class="col-md-12">
        <h1 class="p-3">PANIER</h1>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row justify-content-center">
                    @if(session('cart'))
                    @foreach(session['cart.products'] as $product)
                    @php
        $total += $product['prod_price'] * $product['prod_qty'];
    @endphp
                    <div class='col-12'>
                        <div class='row'>
                            <div class='col-3 border1 p-2'>
                                <div class='bgprod2' style='padding: 10px; width: 140px; height: 120px;'>
                                    <div style='position: relative;'>
                                        <img class='' style='width: 120px; height: 120px; object-fit: cover;' src='admin/{$product[' imagesrc']}'>
                                    </div>
                                </div>
                            </div>
                            <div class='col-5 mt-5 p-2 border1'>
                                <h4>{{ $product['prod_name'] }}</h4>
                                @if(!empty($product['prod_options']))
                                <select class='product-option' data-product-id='{{ $id }}'>
                                    <option value=''>Select Option</option>
                                    @foreach($product['prod_options'] as $option)
                                    <option value='{{ $option['option_id'] }}' data-option-price='{{ $option['option_price'] }}'>{{ $option['option_name'] }} (+{{ $option['option_price'] }}€)</option>
                                    @endforeach
                                </select>
                                @endif
                                <p>{{ $product['qty'] }} Piece</p>
                            </div>
                            <div class="col-2 mt-5 p-2 border1">
                                <div class='pricetag'>
                                    <div class='sidept'>
                                        <span id='sidept3'>x</span>
                                        <a href="{{ url('add-to-cart?prod_id=' . $product['prodid'] . '&decrement=1') }}" role='button' class='btn pbtn' style='display: {{ $quantityshow }};'>-</a>
                                    </div>
                                    <div class='centerinput'><input type='text' value='{{ $product['quantity'] }}' disabled></div>
                                    <div class='sidelast'><a href="{{ url('add-to-cart?prod_id=' . $product['prodid']) }}" role='button' class='btn pbtn'>+</a></div>
                                </div>
                            </div>
                            <div class='col-2 mt-5 p-2 border1'>
                                <p style='font-size: 18px;'><strong id='product_price_{{ $id }}'>
                                        {{ number_format($product['price'] * $product['quantity'], 2) }}€</strong>
                                </p>
                                <a href="{{ url('add-to-cart?remove_id=' . $id) }}" style='color: var(--sec-color);'>Supprimer</a>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="background-color: black;>
                        <div class=" col-md-12">
                        <div class="row text-center p-2">
                            <div class="col-md-2 d-flex align-items-center subcart2" style="flex-direction: column; justify-content: space-between;">
                                <h5 class=" mb-3 mt-3 p-2 seccolr">SOJA SUCRÉE
                                </h5>
                                <div class="pricetag justify-content-center">
                                    <div class="sidept">
                                        <button class="btn pbtn">-</button>
                                    </div>
                                    <div class="centerinput"><input type="text" value="" id="soja_sucre" disabled></div>
                                    <div class="sidelast">
                                        <button class="btn pbtn">+</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-center subcart2" style="flex-direction: column; justify-content: space-between;">
                                <h5 class=" mb-3 mt-3 p-2 seccolr mb-3 mt-3">SOJA SALÉE</h3>
                                    <div class="pricetag justify-content-center">
                                        <div class="sidept">
                                            <button class="btn pbtn">-</button>
                                        </div>
                                        <div class="centerinput"><input type="text" value="" id="soja_salee" disabled></div>
                                        <div class="sidelast">
                                            <button class="btn pbtn">+</button>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-center subcart2" style="flex-direction: column; justify-content: space-between;">
                                <h5 class=" mb-3 mt-3 p-2 seccolr">SAUCE SPICY</h5>
                                <div class="pricetag justify-content-center">
                                    <div class="sidept"><button onclick="updateValue('sauce_spicy', 'decrement')" class="btn pbtn">-</button></div>
                                    <div class="centerinput"><input type="text" value="" id="sauce_spicy" disabled></div>
                                    <div class="sidelast">
                                        <button class="btn pbtn">+</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-center subcart2" style="flex-direction: column; justify-content: space-between;">
                                <h5 class=" mb-3 mt-3 p-2 seccolr">BAGUETTES</h5>
                                <div class="pricetag justify-content-center">
                                    <div class="sidept"><button onclick="updateValue('baguettes', 'decrement')" class="btn pbtn">-</button></div>
                                    <div class="centerinput"><input type="text" value="" id="baguettes" disabled></div>
                                    <div class="sidelast">
                                        <button class="btn pbtn">+</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-center subcart2" style="flex-direction: column; justify-content: space-between;">
                                <h5 class=" mb-3 mt-3 p-2 seccolr">WASABI</h5>
                                <div class="pricetag justify-content-center">
                                    <div class="sidept"><button onclick="updateValue('wasabi', 'decrement')" class="btn pbtn">-</button></div>
                                    <div class="centerinput"><input type="text" value="" id="wasabi" disabled></div>
                                    <div class="sidelast">
                                        <button class="btn pbtn">+</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-center subcart2" style="flex-direction: column; justify-content: space-between;">
                                <h5 class=" mb-3 mt-3 p-2 seccolr">GINGER</h5>
                                <div class="pricetag justify-content-center">
                                    <div class="sidept"><button onclick="updateValue('ginger', 'decrement')" class="btn pbtn">-</button></div>
                                    <div class="centerinput"><input type="text" value="" id="ginger" disabled></div>
                                    <div class="sidelast">
                                        <button class="btn pbtn">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <h3 class="p-5" style="color: var(--sec-color);">Laissez-vous tenter par…</h3>
                    </div>
                    <div class="col-12">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="accompagnements-tab" data-bs-toggle="tab" data-bs-target="#accompagnements" type="button" role="tab" aria-controls="home" aria-selected="true">ACCOMPAGNEMENTS</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="deserts-tab" data-bs-toggle="tab" data-bs-target="#deserts" type="button" role="tab" aria-controls="profile" aria-selected="false">DESSERTS</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="boissons-tab" data-bs-toggle="tab" data-bs-target="#boissons" type="button" role="tab" aria-controls="contact" aria-selected="false">BOISSONS</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="" role="tabpanel" aria-labelledby="-tab">
                                <div class="row">

                                    <div class="col-md-4 subcart m-2" style="height: 250px;">
                                        <h5 class="mb-3 mt-3 p-2 seccolr mb-3 mt-3 text-center"><img style="width: 100px; height: 100px; object-fit: contain;" src="admin/<?= $product['imgsrc'] ?>"><br><?= $product['prod_name'] ?></h5>
                                        <div class="pricetag justify-content-center">
                                            <div class="sidept"><span id="sidept3">x</span></div>
                                            <div class="centerinput"><input type="text" value="1"></input></div>
                                            <div class="sidelast"><a href="add-to-cart.php?prod_id=" role="button" class="btn pbtn">+</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                    </div>
                    <div class="col-md-4">
                        <h3 class="whitebg p-3 d-flex" style="justify-content: space-between;">
                        SOUS TOTAL: <span style="width: auto; display: inline-flex; text-align: right;">€{{ number_format($total, 2) }}</span>
                        </h3>
                        <div class="mb-3 mt-3 d-flex justify-content-end">
                            <a href="{{ route('place-order') }}" role="button" class="sushibtn">commander</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="p-3 d-flex" style="justify-content: center;">
                            Rien à commander
                        </h3>
                        <div class="mb-3 mt-3 d-flex justify-content-center">
                            <a href="{{ route('menu') }}" role="button" class="sushibtn">aller au menu</a>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
</div>
@endsection