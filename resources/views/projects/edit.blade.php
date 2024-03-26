@extends('projects.layout')

@section('content')

<div class="card">
  <div class="card-header">Edit Project</div>
  <div class="card-body">
      
      <form action="{{ url('project/' .$project->id) }}" method="post">
        @csrf
        @method('PUT') 
        
        <input type="hidden" name="id" id="id" value="{{$project->id}}" />
        <label>Name</label><br>
        <input type="text" name="name" id="name" value="{{$project->name}}" class="form-control"><br>
        <label>Description</label><br>
        <input type="text" name="description" id="description" value="{{$project->description}}" class="form-control"><br>
        <label>Status</label><br>
        <input type="text" name="status" id="status" value="{{$project->status}}" class="form-control"><br>
        <label>Date</label><br>
        <input type="date" name="date" id="date" value="{{$project->date}}" class="form-control"><br>
        <input type="submit" value="Update" class="btn btn-success"><br>
    </form>
   
  </div>
</div>

@stop
