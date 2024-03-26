@extends('projects.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Projects Page Create</div>
  <div class="card-body">
      
      <form action="{{ url('project') }}" method="post">
        @csrf

        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Descriere</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>
        <label>Starea</label></br>
        <input type="text" name="status" id="status" class="form-control"></br>
        <label>Data</label></br>
        <input type="text" name="date" id="date" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop