@extends('layouts.app')

@section('content')
    <form>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Indirizzo</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="address">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Specializzazione</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="description">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Foto</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="photo">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Servizio</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="service">
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" name="visible">
                            <label class="form-check-label" for="disabledFieldsetCheck">
                                Visibilità
                            </label>
                        </div>
                    </div>
                </div>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
