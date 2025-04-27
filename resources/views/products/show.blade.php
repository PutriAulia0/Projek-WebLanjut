<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name= "viewport" content="width=device-width, initial-scale=1.0">
    <title>{{  $products['name'] }}</title>
</head>

<body>
    <h1>Detail Produk: {{  $products['name'] }}</h1>
    <p> Harga: Rp. {{ number_format($products['price'], 0, ',', '.') }} </p>
    <a href="{{ url('/app\Http\Controllers\ProductController.php') }}"> Kembali ke Daftar Produk</a>       
</body>
</html>