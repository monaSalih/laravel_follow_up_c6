@php
$fruits=['banana','apple','orange'];

$products=[
    ['name'=>'laptop', 'price'=>1000],
    ['name'=>'iphone', 'price'=>500],
    ['name'=>'screen', 'price'=>2000],
    
    ]
@endphp

@foreach($fruits as $fruit)
    <li>{{ $fruit }}</li>

@endforeach
</ul>
<ul>

@foreach($products as $product)
<li> Name:{{$product['name']}} ,price: {{$product['price']}}</li>
</ul>
@endforeach