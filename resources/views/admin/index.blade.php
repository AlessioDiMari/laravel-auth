@extends('layouts.app')

@section('content')

    <div class="container py-5">

        <h1>Sezione Admin</h1>
        <h3>Benvenuto {{$user->name}}</h3>

        @dump($user)

    </div>

@endsection