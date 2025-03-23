@extends('layouts.template')

@section('contant')
<form action="" method="get">
    @csrf
    <button class="btn btn-primary">Create</button>

  </form>
  

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
      <th scope="row">1</th>
      <td></td>
      <td><img src="" alt="" srcset="" style="width:100px; height:100px"></td>
      <td></td>
      <td>
      <form action="" method="post">
  
        <button class="btn btn-success">Edit</button>
        </form>
        </td>
        <td>
        <form action="" method="post">
  
      <button class="btn btn-danger">Delete</button> 
    </form>
    </td>
     
    </tr>
  </tbody>
</table>

