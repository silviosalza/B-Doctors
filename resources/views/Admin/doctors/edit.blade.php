@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('admin.doctors.update', $doctor) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleInputAddress" class="form-label">Indirizzo</label>
                        <input type="address" class="form-control" id="exampleInputAddress" aria-describedby="addressHelp"
                            name="address" value="{{ $doctor->address }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputDescription" class="form-label">Descrizione</label>
                        <textarea id="type" name="description" class="form-control" id="exampleInputDescription" rows="5">{{ $doctor->description }}</textarea>

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPhoto" class="form-label">Foto</label>
                        <input type="text" class="form-control" id="exampleInputPhoto" name="photo"
                            value="{{ $doctor->photo }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleInputService" class="form-label">Servizio</label>
                        <input type="text" class="form-control" id="exampleInputService" aria-describedby="emailHelp"
                            name="service" value="{{ $doctor->services }}">
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" name="visible">
                            <label class="form-check-label" for="disabledFieldsetCheck">
                                Visibilità
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputTypologies" class="form-label">Specializzazione</label>
                        @foreach ($typologies as $typology)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck"
                                    name="typologies[]">

                                <label class="form-check-label" for="disabledFieldsetCheck">
                                    {{ $typology->name }}
                                </label>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>


            <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                <button class="btn btn-secondary me-2" type="reset">Reset</button>
                <button class="btn btn-primary ms-2" type="submit">Modifica</button>
            </div>
        </form>
    </div>
@endsection
