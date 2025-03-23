@extends('layouts.template')
@section('contant')
<form class="container mt-5" action="" method="post" >

  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label>
    <input type="input" class="form-control" id="exampleInputName" name="name" value="">
  </div>
  <div class="mb-3">
    <label for="exampleInputPhoto" class="form-label">insert photo</label>
    <input type="input" class="form-control" id="exampleInputPhoto" name="photo" value="">
  </div>
  
  <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-control" name="status" id="status">
            <option value="activate" >Activate</option>
            <option value="inactive" >Inactive</option>
        </select>
    </div>

  <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form> 
@endsection