@extends('frontend.layout.main')


@section('title')
Our all t-shirt collection
@endsection
@section('content')
<!-- products listing -->
<!-- Latest SHirts -->
<div class="row">

    @forelse ($products as $product)
    <div class="small-3 columns">
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a class="button expanded add-to-cart">
                    Add to Cart
                </a>
                <a href="#">
                    <img src="{{ url('public/images',$product->image) }}" />
                </a>
            </div>
            <a href="{{ route('shirt',$product->id) }}">
                <h3>
                    {{ $product->name }}
                </h3>
            </a>
            <h5>
                ${{ $product->price }}
            </h5>
            <p>
            {{ $product->description }}
            </p>
        </div>
    </div>

    @empty

    <h3>No Product yet</h3>

    @endforelse

</div>

<br>
@endsection