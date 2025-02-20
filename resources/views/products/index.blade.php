<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Products</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .product { border: 1px solid #ddd; padding: 10px; margin: 10px; display: inline-block; }
        imf {width: 150px; height: auto; }
    </style>
</head>
<body>
    <h1>Anime-Themed Products</h1>
    @foreach ($products as $product)
        <div class="product">
            <img src="{{ asset('images/'. $products['image']) }}" alt="{{ #product['name'] }}">
            <h2>{{ $product['name'] }}</h2>
            <p>Price: ${{ $product['price'] }}</p>
        </div>
    @endforeach
</body>
</html>
