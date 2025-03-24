@extends('layouts.template')

@section('contant')
<form action="{{route('create_data')}}" method="get">
    @csrf
    <button class="btn btn-primary">Create</button>

</form>

@if(session('status'))
<h6 class="alert alert-success">
    {{session('status')}}
</h6>
@endif


<table class="container mt-5 table table-striped table-bordered border-primary">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach($catogories as $catogory)
            <th scope="row">1</th>
            <td>{{$catogory['name']}}</td>
            <td><img src="{{$catogory['photo']}}" alt="" srcset="" style="width:100px; height:100px"></td>
            <td>{{$catogory['status']}}</td>
            <td>
                <form action="{{route('update_gategory',['id'=>$catogory->id])}}" method="post">
                @csrf
                    <button class="btn btn-success">Edit</button>
                </form>
            </td>
            <td>
                <form action="{{route('delete_catogry',['id'=>$catogory->id])}}" method="post">
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>