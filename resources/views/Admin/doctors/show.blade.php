@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="title d-flex justify-content-between align-items-center">
            <h2>{{ $user->name }}</h2>

        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Indirizzo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Specializzazione</th>
                    <th scope="col">Servizi</th>
                    <th scope="col">Foto</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <th scope="row">{{ $user->name }}</th>
                    <td>{{ $doctor->address }}</td>
                    <td>{{ $doctor->description }}</td>
                    <td>
                        @foreach ($doctor->typologies as $typology)
                            {{ $typology->name }},
                        @endforeach
                    </td>
                    <td>{{ $doctor->services }}</td>
                    <td>{{ $doctor->photo }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
