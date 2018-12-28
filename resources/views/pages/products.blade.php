<?php
    if($id > 0){
        $products = DB::select("select * from products where id = ?", [$id])[0];
    }else{
        $products = DB::select('select * from products');
    }
    $title = 'Products';
?>
@include('layouts/header')

    @if ($id)

        <h1>{{ $products->name }}</h1>
        <section class="boxes">
            <div class="box">
                <p>
                    {{ $products->description }}
                </p>
                <span>{{ $products->price }}</span>
            </div>
        </section>

    @else

        <h1>Products</h1>
        <section class="boxes">
            @foreach ($products as $product)
                <div class="box">
                    <h3>{{ $product->name }}</h3>
                    <p>
                        {{ $product->price }}
                    </p>
                    <a href="/products/{{ $product->id }}">LEARN MORE</a>
                </div>
            @endforeach
        </section>

    @endif





@include('layouts/footer')
