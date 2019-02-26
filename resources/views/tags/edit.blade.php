@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Tag {{$tag->tag}}</div>

                <div class="card-body">
                    
   <form action="{{route('tag.update',['id'=>$tag->id])}}" methode='POST' enctype="multipart/form-data" >
                        

<div class="form-group">
   

  <div class="form-group"  >
    <label for="tag">Name Tag</label>
    <input type="text" class="form-control" name="tag"  value="{{$tag->titel}}">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
            </div>
        </div>
    </div>
</div>
@endsection
