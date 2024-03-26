@extends('projects.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Projects  Page</div>
  <div class="card-body">
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $projects->name }}</h5>
        <p class="card-text">Descriere : {{ $projects->description }}</p>
        <p class="card-text">Starea : {{ $projects->status }}</p>
        <p class="card-text">Date : {{ $projects->date }}</p>
  </div>
       
    </hr>
  
  </div>
</div>