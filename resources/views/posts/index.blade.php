@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts</div>

                <div class="card-body">

@if($posts->count()>0)
<table class="table table-striped" >
  <thead>
    <tr>
      <th scope="col">Photo</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <tbody>
  
    
      @foreach($posts as $post)
     
        <tr>
        <th scope="row">
      <img src="/uploads/posts/{{$post->photo}}"  class="img-thumbnail" width="150px" height="150px" >
                                                
       </th>
      <th scope="row">{{$post->titel}}</th>
      <th scope="row">{{$post->content}}</th>
      <td><a class="" href="{{route('post.edit',['id'=>$post->id])}} ">
        <i>Edit</i>
      </a></td>
     <td><a class="" href="{{route('post.delete',['id'=>$post->id])}} ">
        <i>Delete</i>
      </a></td>
      
      
    </tr>
@endforeach
@else
<p scope="row" class="text_center">No Posts </p>
@endif
  </tbody>
</table>
            </div>
        </div>
    </div>
</div>
@endsection