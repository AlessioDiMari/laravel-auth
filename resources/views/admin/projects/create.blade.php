@extends('layouts.app')

@section('content')

    <div class="container py-5">

        <h1>Aggiungi progetto</h1>

        <form action="{{route('admin.projects.store')}}" method="POST">
        
            @csrf

            <div class="mb-4">

                <label for="name" class="form-label">Titolo</label>
                <input type="text" class="form-control @error ('name') is-invalid @enderror" name="name" id="name" aria-describedby="emailHelp" placeholder="Titolo" value="{{old('name')}}">
                @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
                <small id="titleHelper">Nome del progetto, massimo 255 caratteri</small>

            </div>

            <div class="mb-4">

                <label for="argument" class="form-label">Argomento</label>
                <textarea type="text" class="form-control @error ('argument') is-invalid @enderror" name="argument" id="argument" aria-describedby="emailHelp" placeholder="Argomento">{{old('argument')}}</textarea>
                @error('argument')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <button class="btn btn-primary">Aggiungi</button>

        </form>


    </div>

@endsection