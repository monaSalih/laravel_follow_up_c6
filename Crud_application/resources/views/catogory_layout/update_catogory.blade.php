@extends('layouts.template')
@section('contant')
<form class="container mt-5" action="{{route('save_update_gategory',$catogory_data->id)}}" method="post" >
@csrf
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label>
    <input type="input" class="form-control" id="exampleInputName" name="name" value="{{$catogory_data->name}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPhoto" class="form-label">insert photo</label>
    <input type="input" class="form-control" id="exampleInputPhoto" name="photo" value="{{$catogory_data->photo}}">
  </div>
  
  <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-control" name="status" id="status">
            <option value="activate" {{$catogory_data->status == 'activate'?'selected':''}} >Activate</option>
            <option value="inactive" {{$catogory_data->status=='inactivate'?'selected':''}}>Inactive</option>
        </select>
    </div>

  <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form> 
@endsection