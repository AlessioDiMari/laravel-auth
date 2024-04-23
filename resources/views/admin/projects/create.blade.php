@extends('layouts.app')

@section('content')

    <div class="container py-5">

        <h1>Aggiungi progetto</h1>

        <form action="{{route('admin.project.store')}}">
        
            @csrf

            <div class="mb-4">

                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error ('title') is-invalid @enderror" name="title" id="title" aria-describedby="emailHelp" placeholder="Titolo" value="{{old('title')}}">

            </div>

            <div class="mb-4">

                <label for="content" class="form-label">Contenuto</label>
                <textarea type="text" class="form-control @error ('content') is-invalid @enderror" name="content" id="content" aria-describedby="emailHelp" placeholder="Titolo">{{old('content')}}</textarea>

            </div>

        </form>


    </div>

@endsection