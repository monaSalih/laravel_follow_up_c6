@extends('layouts.master')
@section('contant')
<ul>
@foreach($products as $product)
<li> Name:{{$product['name']}} ,price: {{$product['price']}}</li>
</ul>
@endforeach
</ul>
@endsection