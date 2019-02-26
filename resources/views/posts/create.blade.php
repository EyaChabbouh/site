@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Creat Post</div>

                <div class="card-body">
                    @if(count($errors)>0)

                    <ul class="navbar-nav mr-auto">
                        @foreach($errors->all() as $error)
      <li class="nav-item active">
        {{ $errors}}
      </li>
      @endforeach
    </ul>
@endif
  <form action="{{route('post.store')}}" methode='POST' enctype="multipart/form-data" >
                        {{ csrf_field() }}

<div class="form-group">
    <label for="exampleFormControlSelect1">Category</label>
    <select class="form-control" name="category_id" id="category">
      @foreach ($categories as $category)
      <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
    </select>
  </div>

  <div class="form-check">
    @foreach ($tags as $tag)
      <input class="form-check-input" type="checkbox" name="tags[]" >
       <label class="form-check-label" >{{$tag->tag}} </label>
      @endforeach
 
  
</div>

  <div class="form-group"  >
    <label for="titel">Titel</label>
    <input type="text" class="form-control" name="titel"  placeholder="Enter titel">
  </div>
  <div class="form-group">
    <label for="content">Description</label>
    <textarea class="form-control" name="content" rows="8" cols="8"></textarea>
  </div>
  <div class="form-group">
    <label for="photo">Photo</label>
    <input type="file" class="form-control-file" name="photo">
  </div>
  <button type="submit" class="btn btn-primary">save</button>
</form>
            </div>
        </div>
    </div>
</div>
@endsection
