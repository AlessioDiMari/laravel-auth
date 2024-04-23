@extends('layouts.app')

@section('content')

    <div class="container py-5">

        <h1>{{$project->name}}</h1>

        <p>{{$project->argument}}</p>

        <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-warning">Modifica</a>

    </div>

@endsection