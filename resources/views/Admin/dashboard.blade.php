@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="title d-flex justify-content-between align-items-center">
            <h2>Il tuo profilo</h2>
            <span class="badge text-bg-primary">Crea il tuo profilo</span>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Specializzazione</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <th scope="row">{{ $user->name }}</th>
                    @foreach ($doctor->typologies as $typology)
                        <td>{{ $typology->name }}</td>
                    @endforeach
                    <td>
                        <div class="d-flex gap-2 flex-wrap justify-content-center text-center align-items-center">

                            <a class="btn btn-success bg-gradient" href="{{ route('admin.doctors.show', $doctor) }}">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a class="btn btn-primary" href="">
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
