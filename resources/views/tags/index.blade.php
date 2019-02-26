@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tags</div>

                <div class="card-body">

 @if ($tags->count()>0)
<table class="table table-striped" >
  <thead>
    <tr>
     
      <th scope="col">Name Tag</th>
      
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <tbody>
  
    
      @foreach($tags as $tag)
     
        <tr>
      <th scope="row">{{$tag->tag}}</th>
      
      <td><a class="" href="{{route('tag.edit',['id'=>$tag->id])}} ">
      <i >Edit</i>
      </a></td>
     <td><a class="" href="{{route('tag.delete',['id'=>$tag->id])}} ">
        <i>Delete</i>
      </a></td>
      
      
    </tr>
@endforeach
  @else
  <p scope="row" class="text-center">No  tags</p>  
  @endif
  </tbody>
</table>
            </div>
        </div>
    </div>
</div>
@endsection


