@extends('projects.layout')
@section('content')

<div class="card">
  <div class="card-header">Projects Page</div>
  <div class="card-body">
    <div class="card-body">
      <h5 class="card-title">Name : {{ $project->name }}</h5>
      <p class="card-text">Descriere : {{ $project->description }}</p>
      <p class="card-text">Starea : {{ $project->status }}</p>
      <p class="card-text">Date : {{ $project->date }}</p>
    </div>
  </div>
</div>
@endsection
