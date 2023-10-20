@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="title d-flex justify-content-between align-items-center">
            <h2>Il tuo profilo</h2>
            <span class="badge text-bg-primary">Crea il tuo profilo</span>
        </div>
        <table class="table table-striped">
            <thead>
                <tr class="align-middle text-center">
                    <th scope="col">Nome</th>
                    <th scope="col">Specializzazione</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                <tr class="align-middle text-center">
                    <td scope="row">{{ $user->name }}</td>
                    <td>
                        @foreach ($doctor->typologies as $typology)
                            <p>
                                {{ $typology->name }}
                            </p>
                        @endforeach
                    </td>
                    <td>
                        <div class="d-flex gap-2 flex-wrap justify-content-center text-center align-items-center">

                            <a class="btn btn-success bg-gradient" href="{{ route('admin.doctors.show', $doctor->slug) }}">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a class="btn btn-primary" href="{{ route('admin.doctors.edit', $doctor) }}">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                            <form class="m-0 p-0 d-inline-block" action="" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-secondary delete-button" data-item-title="{{ $doctor->name }}"
                                    type="submit">
                                    <i class="fa-solid fa-eraser"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
