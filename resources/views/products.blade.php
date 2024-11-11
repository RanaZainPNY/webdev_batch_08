<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('mycss/styles.css') }}">
</head>

<body>
    <div class="container">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
        <div class="item">4</div>
        <div class="item">5</div>
        <div class="item">6</div>
        <div class="item">7</div>
    </div>


    {{-- @php
        var_dump($product_data);
    @endphp --}}


    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Brand</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product_data as $product)
                <tr>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['price'] }}</td>
                    <td>{{ $product['brand'] }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
    <script src="{{ asset('myjs/script.js') }}"></script>
</body>

</html>
