@extends('layouts.app')

@section('content')
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
                @foreach ($doctor->typologies as $typology)
                    <td>{{ $typology->name }}</td>
                @endforeach
                <td>{{ $doctor->services }}</td>
                <td>{{ $doctor->photo }}</td>
            </tr>
        </tbody>
    </table>
@endsection
