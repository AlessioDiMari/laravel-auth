@extends('layouts.app')

@section('content')

    <div class="container py-5">

        <h1>Sezione Admin</h1>
        <h3>Benvenuto {{$user->name}}</h3>

        @dump($user)

        {{-- <h5>Ecco i tuoi progetti</h5> --}}

        {{-- <table class="table">
            <thead>
              <tr>
                <th scope="col">Nome progetto</th>
                <th scope="col">Descrizione</th>
              </tr>
            </thead>
            <tbody>

                {{-- @foreach ($projects as $project)
                    
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <a href="" class="btn btn-outline-primary">Vedi</a>
                    </tr>

                @endforeach --}}

            {{-- </tbody>
        </table> --}}


        <a href="{{route('admin.projects.create')}}" class="btn btn-primary">Aggiungi un progetto</a>

    </div>

@endsection