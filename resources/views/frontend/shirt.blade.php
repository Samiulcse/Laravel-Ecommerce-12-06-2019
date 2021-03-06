@extends('frontend.layout.main')

@section('title')
Buy a t-shirt
@endsection

@section('content')
<!-- Latest SHirts -->

@if(!empty($product))
<div class="row">
    <div class="small-5 small-offset-1 columns">
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a href="#">
                    <img src="{{ url('public/images',$product->image) }}" />
                </a>
            </div>
        </div>
    </div>
    <div class="small-6 columns">
        <div class="item-wrapper">
            <h3 class="subheader">
                <span class="price-tag">${{ $product->price }}</span> {{ $product->name }}
            </h3>
            <div class="row">
                <div class="large-12 columns">
                    <label>
                        Select Size
                        <select>

                            <option value="{{ $product->size }}">
                                {{ $product->size }}
                            </option>

                        </select>
                    </label>
                    <a href="#" class="button  expanded">Add to Cart</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endif

<br>
@endsection