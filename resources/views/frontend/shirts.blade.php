@extends('frontend.layout.main')


@section('title')
Our all t-shirt collection
@endsection
@section('content')
<!-- products listing -->
<!-- Latest SHirts -->
<div class="row">

    @for ($i = 0; $i < 12; $i++)
    <div class="small-3 columns">
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a class="button expanded add-to-cart">
                    Add to Cart
                </a>
                <a href="#">
                    <img src="http://i.imgur.com/Mcw06Yt.png" />
                </a>
            </div>
            <a href="{{ route('shirt') }}">
                <h3>
                    Kickin with Kraken Tee
                </h3>
            </a>
            <h5>
                $19.99
            </h5>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
            </p>
        </div>
    </div>
    @endfor

</div>

<br>
@endsection