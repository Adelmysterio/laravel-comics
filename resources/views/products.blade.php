@extends('layouts.app')

@section('main-content')
    <div class="container">
        <div class="wrapper">
            @foreach ($data as $product)
                <article>

                    <figure><img src="{{ $product['thumb'] }}" alt="{{ $product['title'] }}"></figure>
                    <h4>{{ $product['title'] }}</h4>
                    <p>Price: {{ $product['price'] }}</p>
                    <p>Series: {{ $product['series'] }}</p>
                    <p>Sale Date: {{ $product['sale_date'] }}</p>
                    <p>Type: {{ $product['type'] }}</p>
                </article>
            @endforeach

        </div>
    </div>
@endsection
