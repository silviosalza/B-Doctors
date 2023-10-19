
@section('content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Specializzazione</th>
            <th scope="col">Indirizzo</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Servizi</th>
            <th scope="col">Foto</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($doctors as $doctor)
        <tr>
            <th scope="row">{{ $doctor->id }}</th>
            <td>{{ $doctor->address }}</td>
            <td>{{ $doctor->description }}</td>
            <td>{{ $doctor->services }}</td>
            <td>{{ $doctor->photo }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
